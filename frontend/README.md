# West Crew 22 - Frontend

Vue.js frontend application for West Crew 22 Bulgarian rap collective.

## Features

- 🎵 Interactive music player with YouTube integration
- 📱 Mobile-responsive design
- 🎨 Hardcore graffiti-style UI
- 🇧🇬 Bulgarian localization
- ⚡ Fast static site deployment

## Development

```bash
# Install dependencies
npm install

# Start development server
npm run dev

# Build for production
npm run build
```

## Deployment

### Method 1: GitHub Integration (Recommended)
1. Go to [Cloudflare Dashboard](https://dash.cloudflare.com/) → Pages → "Create a project"
2. Connect GitHub and select this repository
3. Configure build settings:
   - **Build command**: `npm run build`
   - **Build output directory**: `dist`
   - **Root directory**: `frontend`
4. Deploy!

### Method 2: Wrangler CLI
```bash
# Build the app
npm run build

# Deploy with Wrangler (if available)
npx wrangler pages deploy dist --project-name west-crew-22
```

### Method 3: Manual Upload
1. Run `npm run build` to create the `dist` folder
2. Zip the contents of the `dist` folder
3. Go to Cloudflare Pages → "Upload assets"
4. Upload the zip file

### Build Output
- **JS Bundle**: ~124KB (45KB gzipped)
- **CSS Bundle**: ~21KB (4KB gzipped)
- **Total**: ~145KB minified

## Tech Stack

- Vue 3
- Vue Router
- Tailwind CSS
- Vite
- YouTube API integration