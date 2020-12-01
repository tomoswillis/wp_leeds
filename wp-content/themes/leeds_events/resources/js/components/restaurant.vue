<template>
<div v-if="post" class="px-2 pb-8 cursor-pointer">
	<a :href="post.link" >
		<div class="flex flex-col justify-end inline text-white bg-thumbnail rounded-xl relative">
			<img :src="post.acf.image.url" alt="restaurant thumbnail" class="rounded-lg thumbnail  h-32 object-cover relitive">
			<!-- <h2 class="text-md font-bold absolute ">{{post.category}}</h2> -->
			<h2 class="ext-2xl font-bold absolute px-5 mb-8 w-30">{{post.acf.name}}</h2>
			<h3 class="text-lg absolute px-5 mb-2">{{post.acf.location.city}}</h3>
		</div>
		<div class="">
			<div class="hidden lg:block px-5 max-width-xs text-sm my-2 text-gray-700 h-20">
				{{post.acf.description}}
			</div>
				
		</div>
	</a>
</div>
</template>

<script>
	export default {
        props: {
            id: Number,
        },
		data() {
			return {
			};
		},  
		computed: {
			// using the props id to get the data for the post. The ID corrilates to the id of the post
			post() {
				return this.$store.getters.getRestaurantPost(this.id);
            },
        },
        
        methods: {

        },
	};
</script>