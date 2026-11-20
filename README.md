# Globe Coat

Merged Globe Coat website: the original marketing site plus the new Presentation landing page, managed with Filament.

## Public pages

- `/` original homepage
- `/presentation` new design landing page
- `/about`, `/projects`, `/shop`, `/news`, `/team`, `/roadmap`
- `/sample-request` presentation sample form
- `/admin` Filament CMS

## Admin

- URL: `/admin`
- Email: `admin@globecoat.ae`
- Password: `password`

Filament manages:

- Website content: projects/blogs, products, news, categories, team
- Presentation page copy, finishes, gallery, inquiries

## Setup

```powershell
copy .env.example .env
composer install
php artisan key:generate
php artisan migrate --seed
npm install
npm run build
php artisan serve
```

Uploaded media lives in `storage/app/public` and is linked from `public/storage`.

## Deploy on Render

This repo includes a `Dockerfile` and `render.yaml` for [Render](https://render.com).

1. Push to GitHub (already connected as `Mendim11/globe-coat`).
2. In Render: **New → Blueprint** → select this repo, or **New → Web Service** → Docker runtime.
3. Generate an app key locally:

```powershell
php artisan key:generate --show
```

4. Set these environment variables on the service:

| Key | Value |
| --- | --- |
| `APP_KEY` | output of `key:generate --show` |
| `APP_URL` | your Render URL, e.g. `https://globe-coat.onrender.com` |
| `APP_ENV` | `production` |
| `APP_DEBUG` | `false` |
| `DB_CONNECTION` | `sqlite` |
| `LOG_CHANNEL` | `stderr` |

5. Health check path: `/up`
6. Deploy. First boot runs migrations + seed automatically.

**Notes**

- Free tier sleeps after idle (~1 min wake). Paid (~$7/mo) stays always on.
- SQLite on free Render is ephemeral (reset on redeploy). Admin login after seed: `admin@globecoat.ae` / `password`.
- For lasting CMS edits/uploads, add a Render disk later or switch to Postgres.
