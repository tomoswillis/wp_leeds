<template>
<!-- The restaurant component needs the id to know what to display. This needs to get passed down via props. We run a loop to create resaurant comps as and when -->
	<div>
	<VueSlickCarousel v-bind="settings">
		<restaurant v-for= "id in $props.id" :key='id' :id='id' />
	</VueSlickCarousel>
	</div>
</template>
<script>
  export default {
	props: {
			'id': Array,
        },
    data() {
      return {
        settings: {
			"infinite": true,
			"speed": 500,
			"slidesToShow": 5,
			"slidesToScroll": 3,
			"initialSlide": 2,
			'arrows': false,
			"dots": true,
			"dotsClass": "slick-dots custom-dot-class",
			"arrows": true,
			"centerMode": true,
			"responsive": [
				{
				"breakpoint": 2000,
				"settings": {
					"slidesToShow": 5,
					"slidesToScroll": 3,
					"infinite": true,
					"centerMode": true,
					
					}
				},
				{
				"breakpoint": 1280,
				"settings": {
					"slidesToShow": 3,
					"slidesToScroll": 3,
					"infinite": true,
					"centerMode": true,
					
					}
				},
				{
				"breakpoint": 775,
				"settings": {
					"infinite": false,
					"slidesToShow": 1,
					"slidesToScroll": 1,
					"speed": 500,
					"rows": 2,
					"slidesPerRow": 1,
					"centerMode": true,
					"variableWidth": true,
					}
				},
				{
				"breakpoint": 320,
				"settings": {
					"infinite": true,
					"slidesToShow": 1,
					"slidesToScroll": 1,
					"speed": 500,
					"rows": 2,
					"slidesPerRow": 1,
					"centerMode": false,
					}
				},
			]
		},
      }
	},
	computed: {
		foo() {
			return this.slugOne
		}
	},
  }
</script>

