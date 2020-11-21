<template>
	
	<div class="bg-white mx-2 px-2 py-4 my-5 rounded-lg max-w-xs shadow-md ">
		<a :href="$props.url" >
		<div class="px-2  cursor-pointer">
			<div class=" bg-thumbnail rounded-xl">
				<div class="flex flex-col justify-end inline text-white bg-thumbnail rounded-xl relative">
					<img :src="$props.postdata.image.url" alt="thumbnail" class="rounded-lg h-32 object-cover relitive">
					<!-- <h2 class="text-md font-bold absolute ">{{data.category}}</h2> -->
					<h2 class="text-2xl font-bold absolute px-5 mb-8 w-30">{{$props.postdata.name}}</h2>
					<h3 class="text-lg absolute px-5 mb-2">{{$props.postdata.location.city}}</h3>
				</div>
			</div>
			<div class="">
				
				<div class="px-5 max-width-xs text-sm my-2 text-gray-700">
					
					{{$props.postdata.description}}
						
				</div>
			</div>
		</div>
		</a >
	</div>
	
	
</template>
<script>
  export default {
	props: {
			'postdata': Object,
			url: String,
        },
    data() {
      return {

      }
	},
	computed: {
		
	},
  }
</script>

