/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
        container:{
          padding:{
            DEFAULT:'15px'
          }
        },
        screen:{
          sm:'640px',
          md:'768px',
          lg:'960px',
          xl:'1200px',
        },
        fontFamily:{
          primary:"DM Serif Display",
          secondary:"Jost",
        },
        backgroundImage:{
          hero:'url(/public/images/IOT-bg.jpg)',
          grid:'url(/public/images/grid.png)',
        },
        extend: {
          colors:{
            primary:{
              DEFAULT:'#292f36',
              hover:'#343e4a',
            },
            secondary:'#4d5053',
            accent:{
              DEFAULT:'#cda274',
              secondary:'#f4f0ec',
              hover:'#b88c5d'
            }
          }
        },
      },
      plugins: [
        require('@tailwindcss/forms'),
      ],
  }
