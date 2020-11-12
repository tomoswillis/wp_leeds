<template>
<div class="px-2 pb-8 cursor-pointer">
	<div class="flex felx-wrap flex-col justify-end inline text-white bg-thumbnail rounded-xl">
		<img :src="data.thumbnail" alt="restaurant thumbnail" class="">
		<!-- <h2 class="text-md font-bold absolute ">{{data.category}}</h2> -->
		<h2 class="text-2xl font-bold absolute px-2 md:px-5 mb-8">{{data.name}}</h2>
		<h3 class="text-lg absolute px-2 md:px-5  mb-2">{{data.location.shortHand}}</h3>
	</div>
	<div class="">
		<div class="hidden lg:block px-5 max-width-xs text-sm my-2 text-gray-700 h-20">
			{{data.description}}
		</div>
			
	</div>
</div>
</template>

<script>
	export default {
        props: {
            slug: String,
        },
		data() {
			return {
			};
		},  
		computed: {
			data() {
				return this.$store.state.restaurants[this.slug];
            },
        },
        
        methods: {

        },
	};
</script>