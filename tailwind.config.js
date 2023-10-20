/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './img/icon/*.svg',
    'header.php',
    'footer.php',
    'home.php',
    'front-page.php',
    'index.php',
    'page.php',
    'page-contatti.php',
    'archive.php',
    'archive-progetti.php',
    'single.php',
    'single-progetti.php',
    '404.php'
  ],
  theme: {
    fontFamily: {
      'serif': ['Bodoni Moda'],
    },
    extend: {
      colors: {
      }
    },
    plugins: [],
  },
  darkMode: 'class',
}

