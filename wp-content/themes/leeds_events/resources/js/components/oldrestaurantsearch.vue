<template>
<div 
	class="p-2 cursor-pointer bg-white rounded-lg mx-2 my-5 shadow-md"
>
	<div class="inline text-white w-1/4 h-full 
		flex flex-col justify-end rounded-xl
		md:w-1/3
	">
		<img :src="data.thumbnail" alt="thumbnail" class="bg-thumbnail rounded-lg">
		<!-- <h2 class="text-md font-bold absolute ">{{data.category}}</h2> -->
		<h2 class="text-2xl font-bold absolute px-5 mb-8 md:visible sm:invisible ">{{data.name}}</h2>
		<h3 class="text-lg absolute px-5 mb-2 md:visible sm:invisible ">{{data.location.shortHand}}</h3>
	</div>
	<div class="w-3/4">
		<div class="px-5 max-width-xs my-2 text-gray-700 ">
			<h2 class="text-sm"><strong>{{data.name}}:</strong> {{data.location.shortHand}}</h2>
			<div class="flex items-center">
				<div class="text-xs mr-5 flex	">
					<p class="font-bold mr-2">Open</p>
					{{data.times.open}} - {{data.times.close}}
				</div>
				<div>
					<div class="flex">
						<svg height="10" width="15"  viewBox="0 0 600 600" preserveAspectRatio="xMinYMin meet">
            				<polygon points="294,3 585.246118,214.602691 474,556.983037 114,556.983037 2.753882,214.602691" fill="#FB9E4F" stroke="#aaa" stroke-width="1"/>
       			 		</svg>
							<svg height="10" width="15"  viewBox="0 0 600 600" preserveAspectRatio="xMinYMin meet">
            				<polygon points="294,3 585.246118,214.602691 474,556.983037 114,556.983037 2.753882,214.602691" fill="#FB9E4F" stroke="#aaa" stroke-width="1"/>
       			 		</svg>
							</svg>
							<svg height="10" width="15"  viewBox="0 0 600 600" preserveAspectRatio="xMinYMin meet">
            				<polygon points="294,3 585.246118,214.602691 474,556.983037 114,556.983037 2.753882,214.602691" fill="#FB9E4F" stroke="#aaa" stroke-width="1"/>
       			 		</svg>
							</svg>
							<svg height="10" width="15"  viewBox="0 0 600 600" preserveAspectRatio="xMinYMin meet">
            				<polygon points="294,3 585.246118,214.602691 474,556.983037 114,556.983037 2.753882,214.602691" fill="#FB9E4F" stroke="#aaa" stroke-width="1"/>
       			 		</svg>
							</svg>
							<svg height="10" width="15"  viewBox="0 0 600 600" preserveAspectRatio="xMinYMin meet">
            				<polygon points="294,3 585.246118,214.602691 474,556.983037 114,556.983037 2.753882,214.602691" fill="#C4C4C4" stroke="#aaa" stroke-width="1"/>
       			 		</svg>
					</div>	
				</div>
			</div>
			<p class="text-xs">{{data.description}}</p>
			<p class="text-xs text-right mt-2"><strong>Average Cost: </strong>£{{data.averageCost}}pp</p>
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