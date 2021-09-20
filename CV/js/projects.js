  
const API_URL = ''
const IMG_PATH = 'https://image.tmdb.org/t/p/w1280'
const SEARCH_API = 'https://api.themoviedb.org/3/search/movie?api_key=3fd2be6f0c70a2a598f084ddfb75487c&query="'


const main = document.getElementById('main')
const form = document.getElementById('form')
const search = document.getElementById('search')

// Get initial movies
getProjects(API_URL)

async function getProjects(url) {
    const res = await fetch(url)
    const data = await res.json()

    showProjects(data.results)
}

function showProjects(projects) {
    main.innerHTML = ''

    projects.forEach((project) => {
        const { title, poster_path, vote_average, overview } = project

        const projeEl = document.createElement('div')
        projeEl.classList.add('project')

        projeEl.innerHTML = `
            <img src="${IMG_PATH + poster_path}" alt="${title}">
            <div class="project-info">
          <h3>${title}</h3>
          <span class="${getClassByRate(vote_average)}">${vote_average}</span>
            </div>
            <div class="overview">
          <h3>Overview</h3>
          ${overview}
        </div>
        `
        main.appendChild(projeEl)
    })
}

function getClassByRate(vote) {
    if(vote >= 8) {
        return 'green'
    } else if(vote >= 5) {
        return 'orange'
    } else {
        return 'red'
    }
}

form.addEventListener('submit', (e) => {
    e.preventDefault()

    const searchTerm = search.value

    if(searchTerm && searchTerm !== '') {
        getProjects(SEARCH_API + searchTerm)

        search.value = ''
    } else {
        window.location.reload()
    }
})