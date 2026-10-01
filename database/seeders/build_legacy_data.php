<?php

$sql = file_get_contents(__DIR__.'/../../_incoming/dbxgaotvwgcbma.sql');
$tables = ['categories', 'product_categories', 'blogs', 'blog_category', 'news', 'products', 'team_members', 'navbars', 'pages'];
$payload = [];

foreach ($tables as $table) {
    if (! preg_match('/INSERT INTO `'.$table.'` \((.*?)\) VALUES\s*(.*?);\s*(?:--|CREATE TABLE|ALTER TABLE|$)/s', $sql, $m)) {
        fwrite(STDERR, "MISS {$table}\n");
        continue;
    }

    $cols = array_map(fn ($c) => trim($c, " \t\n\r\0\x0B`"), explode(',', $m[1]));
    $rowsRaw = preg_split('/\),\s*\(/', trim($m[2]));
    $rows = [];

    foreach ($rowsRaw as $row) {
        $row = trim($row);
        $row = preg_replace('/^\(/', '', $row);
        $row = preg_replace('/\)$/', '', $row);
        $vals = str_getcsv($row, ',', "'", '\\');
        $assoc = [];

        foreach ($cols as $idx => $col) {
            $v = $vals[$idx] ?? null;
            $assoc[$col] = ($v === 'NULL' || $v === null) ? null : $v;
        }

        $rows[] = $assoc;
    }

    $payload[$table] = $rows;
    fwrite(STDERR, "OK {$table} ".count($rows)."\n");
}

file_put_contents(__DIR__.'/legacy_data.php', "<?php\n\nreturn ".var_export($payload, true).";\n");
echo 'wrote '.filesize(__DIR__.'/legacy_data.php')." bytes\n";
