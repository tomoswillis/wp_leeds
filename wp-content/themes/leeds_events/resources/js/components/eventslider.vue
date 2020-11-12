<template>
<div class="">
  <VueSlickCarousel v-bind="settings" >
	<event :slug=slugOne
			class="
				ease-in-out
				transform
				hover:translate-y-2
				duration-150
			
				xl:block
				xl:w-2/12
			">
	</event>
	<event :slug=slugTwo
			class="
				ease-in-out
				transform
				hover:translate-y-2
				duration-150

				sm:mt-0

				md:mt-20
				md:w-1/3
				md:max-w-xl

				lg: w-2/5

				xl:block 
				xl:w-2/12
			">

	</event>
	<event :slug=slugThree
			class="

				ease-in-out
				transform
				hover:translate-y-2
				duration-150

				sm:mt-0
							
				md:w-1/3
				md:max-w-xl

				xl:block
				xl:w-2/12
			">
	</event>
	<event :slug=slugFour 
			class="
				ease-in-out
				transform
				hover:translate-y-2
				duration-150

				sm:mt-0

				md:mt-20 

				md:w-1/3
				md:max-w-xl

				xl:block 
				xl:w-2/12 
			">
	</event>
	<event :slug=slugFive 
			class="  
				ease-in-out
				transform
				hover:translate-y-2
				duration-150

				xl:block 
				xl:w-2/12
			">
			</event>
  </VueSlickCarousel>
</div>
</template>
<script>
  export default {
	props: {
			'slug-one': String,
			'slug-two': String,
			'slug-three': String,
			'slug-four': String,
			'slug-five': String,
        },
    data() {
      return {
        settings: {
			"infinite": true,
			"speed": 500,
			"slidesToShow": 5,
			"slidesToScroll": 5,
			"initialSlide": 0,
			"centerMode": true,
			"centerPadding": "20px",
			'draggable': false,
			'arrows': false,
			'dots': true,
			"responsive": [
				{
				"breakpoint": 1280,
				"settings": {
					"slidesToShow": 3,
					"slidesToScroll": 3,
					"initialSlide": 1,
					'draggable': false,
					}
				},
				{
				"breakpoint": 775,
				"settings": {
					
					"slidesToShow": 2,
					"slidesToScroll": 2,
					"speed": 1000,
					"rows": 1,
					"slidesPerRow": 1,
					"initialSlide": 1,
					'draggable': true,
					}
				},
				{
				"breakpoint": 600,
				"settings": {
					
					"slidesToShow": 1,
					"slidesToScroll": 1,
					"speed": 1000,
					"rows": 1,
					"slidesPerRow": 1,
					'draggable': true,
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

