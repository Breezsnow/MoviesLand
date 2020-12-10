window.onload = function () {

    let search = document.querySelector('#search');

    if (search) {
        search.addEventListener('click', searchMovieApi);
    }

    function searchMovieApi() {

        let inputData = document.querySelector('#title').value;

        let xhttp = new XMLHttpRequest();
        xhttp.open("GET", "https://api.themoviedb.org/3/search/movie?api_key=6985e562c05ec6150e49c08a88da0226&language=fr&page=1&include_adult=false&query=" + inputData); //on va chercher avec get ou post , l'url (api) 
        xhttp.send(); 

        xhttp.onreadystatechange = function () { 
            if (this.readyState === 4 && this.status === 200) {  
                let dataApi = JSON.parse(this.responseText);  

                console.log(dataApi);

                let contentMovies = document.querySelector('#apiMovieList'); 

                let html = '';

                for (movie of dataApi.results) {

                    html += '<div class="card d-inline-flex justify-content-between" style="width: 15rem;">' +
                    '<img class="card-img-top" src="https://image.tmdb.org/t/p/w500/' + movie.poster_path + ' " alt="">' +
                    '<div class="card-body">' +
                        '<h5 class="card-title">' + movie.title + '</h5>' +
                        '<p class="card-text">' + movie.release_date + '</p>' +
                    '</div>' +
                    '</div>';
                }

                contentMovies.innerHTML = html;
            }
        }
    }

}