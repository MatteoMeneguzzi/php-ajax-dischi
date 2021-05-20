const app = new Vue({
	el: "#app",
	data: {
		albums: [],
	},
	created() {
		console.log(window.location.href);
		const dataURL = window.location.href + "scripts/database.php";

		axios
			.get(dataURL)
			.then((res) => {
				console.log(res.data);
				this.albums = res.data;
			})
			.catch((err) => {
				console.log(err);
			});
	},
});
