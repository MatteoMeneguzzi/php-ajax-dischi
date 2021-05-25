const app = new Vue({
	el: "#app",
	data: {
		albums: [],
		artists: [],
		selected: "",
		filterArtist: "All",
	},
	created() {
		console.log(window.location.href);
		const dataURL = window.location.href + "scripts/gen-albums.php";

		axios
			.get(dataURL)
			.then((res) => {
				console.log(res.data);
				this.albums = res.data.albums;
				this.artists = res.data.artists;
			})
			.catch((err) => {
				console.log(err);
			});
	},
	methods: {
		getFiltered() {
			console.log("autoriiii");
			const dataURL = window.location.href + "scripts/gen-albums.php";
			axios
				.get(dataURL, {
					params: {
						artist: this.filterArtist,
					},
				})
				.then((res) => {
					console.log(res.data);
					this.albums = res.data.albums;
					this.artists = res.data.artists;
				})
				.catch((err) => {
					console.log(err);
				});
			// albums.forEach((album) => {
			// 	// e lo inserisco nell'array vuoto TYPES in caso non ci sia già
			// 	if (!authors.includes(album.author)) {
			// 		authors.push(album.author);
			// 	}
			// });

			// return authors;
			// Voglio che la funzione mi restituisca tutti i tipi indivudati
		},
		switchSelect(event) {
			console.log("ciao");
			this.selected = event.target.value;
		},
	},
});
