<template>
  <div id="mapContainer" class="basemap"></div>
</template>

<script>
import mapboxgl from "mapbox-gl";

export default {
props: {
		lat:{
			
			required: true,
		},
		long:{
			
			required: true,
		},
	},

  name: "BaseMap",

  data() {
    return {
		accessToken: 'pk.eyJ1IjoidG9tb3N3aWxsaXMiLCJhIjoiY2tocDNxNjhkMGQyMDJ5bHRkdXFsMHhnNCJ9.nMuqBcvQo0btaa3G3uBN6w',
    };
  },
  mounted() {
	mapboxgl.accessToken = this.accessToken;

    this.map = new mapboxgl.Map({
      container: "mapContainer",
      style: "mapbox://styles/mapbox/streets-v11",
      center: [parseFloat(this.$props.lat), parseFloat(this.$props.long)],
      zoom: 14,
     
	});
  new mapboxgl.Marker()
    .setLngLat([parseFloat(this.$props.lat), parseFloat(this.$props.long)])
    .addTo(this.map);
  },
};
</script>