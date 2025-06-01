# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project Overview

This is a Laravel 12 application for West Crew 22, a Bulgarian rap collective. The application uses Livewire v3 for reactive components and features a music player, video gallery, and crew information pages.

## Essential Commands

### Development
```bash
# Start all development services (recommended)
composer dev

# Or run individually:
php artisan serve          # Start Laravel server
npm run dev               # Start Vite dev server
php artisan queue:listen  # Process background jobs
php artisan pail          # View logs in real-time
```

### Building & Testing
```bash
npm run build            # Build frontend assets
composer test            # Run PHPUnit tests
php artisan test         # Alternative test command
```

### Database
```bash
php artisan migrate              # Run migrations
php artisan migrate:fresh        # Drop all tables and re-run migrations
php artisan tinker              # Interactive shell
```

### Cache Management
```bash
php artisan cache:clear         # Clear application cache
php artisan config:clear        # Clear config cache
php artisan view:clear          # Clear compiled views
php artisan route:clear         # Clear route cache
```

## Architecture

### Livewire Components
Located in `app/Livewire/`, each component has a corresponding Blade view in `resources/views/livewire/`:

- **WestCrewHome**: Homepage component
- **MusicPlayer**: Interactive music player with 14 tracks and YouTube integration
- **Videos**: Video gallery with YouTube embeds
- **Crew**: Team members display
- **Contact**: Contact information

### Routing
All routes are defined in `routes/web.php`:
- `/` - Homepage
- `/videos` - Video gallery
- `/crew` - Crew members
- `/contact` - Contact page

### Frontend Stack
- **Vite**: Asset bundling and hot-reloading
- **Tailwind CSS v4**: Utility-first CSS framework
- **Alpine.js**: Included via Livewire for reactive UI

### Localization
- Primary language: Bulgarian (`bg`)
- Language files in `lang/bg/` and `lang/bg.json`
- Fallback: English

## Key Development Notes

1. **Livewire Development**: When creating new Livewire components, use:
   ```bash
   php artisan make:livewire ComponentName
   ```

2. **Asset Compilation**: Always run `npm run dev` during development for hot-reloading

3. **Database**: Uses SQLite by default (`database/database.sqlite`)

4. **Music Player**: The MusicPlayer component includes hardcoded track data with YouTube video IDs

5. **Styling**: The app uses a graffiti-style theme with custom CSS animations and dark backgrounds