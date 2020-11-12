<template>
<div class=" md:mx-10">
	<div class="mx-10 my-10 md:flex justify-between items-baseline md:my-2">
		<div>
			<h1 class="text-3xl mt-10">All Restaurants</h1>
		</div>
		<div class="md:w-2/5">
			<div class="shadow-md px-2 my-5 flex justify-between rounded-lg">
				<input type="text" placeholder="Search" class="bg-transparent w-4/5 pl-2">
				<button class="bg-orange-500 w-8 h-8 pt-1 rounded-md my-2 text-white">
					<span class="material-icons">
						search
					</span>
				</button>
			</div>
		</div>
	</div>
	<div class=" rounded-lg">
		<div>
			<div class="flex ml-10">
				<div class="p-2 bg-white mt-5 rounded-md mr-5 bg-gray-200">
					<select name="sort" id="sort" class="bg-gray-200">
						<option value="nameasc">Ascending</option>
						</select>
				</div>
				<div class="p-2 bg-white mt-5 rounded-md bg-gray-200">
					<select name="rating" id="rating" class="bg-gray-200">
						<option value="1">1 Star</option>
						<option value="2">2 stars</option>
						<option value="3">3 stars</option>
						<option value="4">4 stars</option>
						<option value="5">5 stars</option>
						</select> 
				</div>
			</div>
		</div>
		<div class="mt-5 flex flex-wrap justify-center">
			<div v-for="restaurant in restaurants">
				<restaurantsearch :slug="restaurant" class=""></restaurantsearch>
				<restaurantsearch :slug="restaurant" class=""></restaurantsearch>
			</div>
		</div>
	</div>
</div>
</template>

<script>
	export default {
        props: {
        },
		data() {
			return {
				
			};
		},  
		computed: {
			restaurants() {
				return Object.keys(this.$store.state.restaurants);
				
            },
        },
        
        methods: {

        },
	};
</script>
	