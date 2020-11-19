<template>
  <div id="mapContainer" class="basemap"></div>
</template>

<script>
import mapboxgl from "mapbox-gl";

export default {
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
      center: [-1.54917, 53.79972],
      zoom: 12,
      maxBounds: [
        [-1.800362, 53.719309],
        [-1.161587, 53.955164],
      ],
	});
new mapboxgl.Marker()
	.setLngLat([-1.54917, 53.79972])
	.addTo(this.map);
  },
};
</script>