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
