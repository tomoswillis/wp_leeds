<template>
<div class="bg-white mx-2 px-2 py-4 my-5 rounded-lg max-w-xs shadow-md ">
	<a :href="$props.url" >
	<div class="px-2  cursor-pointer">
		<div class="flex flex-col justify-end inline text-white bg-thumbnail rounded-xl relative">
			<img :src="$props.postdata.image.url" alt="thumbnail" class="rounded-lg h-32 object-cover relitive">
			<!-- <h2 class="text-md font-bold absolute ">{{data.category}}</h2> -->
			<h2 class="text-2xl font-bold absolute px-5 mb-8 w-30">{{$props.postdata.name}}</h2>
			<h3 class="text-lg absolute px-5 mb-2">{{$props.postdata.location.city}}</h3>
		</div>
		<div class="">
			
			<div class="px-5 max-width-xs text-sm my-2 text-gray-700">
				<div class="flex justify-between items-center mb-2">
					<div class="text-md mr-5 flex	">
						<p class="font-bold mr-2 text-green-500" v-if="this.open == 'true'">Open</p>
						<p class="font-bold mr-2 text-orange-400" v-if="this.open == 'closing'">Closing Soon</p>
						<p class="font-bold mr-2 text-red-400" v-if="this.open == 'false'">closed</p>
						{{$props.postdata.opening_time}} - {{$props.postdata.closing_time}}
					</div>
					<div>
						<div class="flex">
							<svg height="10" width="15"  viewBox="0 0 600 600" preserveAspectRatio="xMinYMin meet">
								<polygon points="294,3 585.246118,214.602691 474,556.983037 114,556.983037 2.753882,214.602691" fill="#FB9E4F" stroke="#aaa" stroke-width="1"/>
							</svg>
								<svg height="10" width="15"  viewBox="0 0 600 600" preserveAspectRatio="xMinYMin meet">
								<polygon points="294,3 585.246118,214.602691 474,556.983037 114,556.983037 2.753882,214.602691" fill="#FB9E4F" stroke="#aaa" stroke-width="1"/>
							</svg>
								
								<svg height="10" width="15"  viewBox="0 0 600 600" preserveAspectRatio="xMinYMin meet">
								<polygon points="294,3 585.246118,214.602691 474,556.983037 114,556.983037 2.753882,214.602691" fill="#FB9E4F" stroke="#aaa" stroke-width="1"/>
							</svg>
								
								<svg height="10" width="15"  viewBox="0 0 600 600" preserveAspectRatio="xMinYMin meet">
								<polygon points="294,3 585.246118,214.602691 474,556.983037 114,556.983037 2.753882,214.602691" fill="#FB9E4F" stroke="#aaa" stroke-width="1"/>
							</svg>
								
								<svg height="10" width="15"  viewBox="0 0 600 600" preserveAspectRatio="xMinYMin meet">
								<polygon points="294,3 585.246118,214.602691 474,556.983037 114,556.983037 2.753882,214.602691" fill="#C4C4C4" stroke="#aaa" stroke-width="1"/>
							</svg>
						</div>	
					</div>
				</div>
				{{$props.postdata.description}}
					<p class="text-xs text-right mt-2"><strong>Average Cost: </strong>£{{$props.postdata.average_cost}}pp</p>
			</div>
		</div>
	</div>
	</a>
</div>

</template>

<script>
	import { DateTime } from 'luxon';
	export default {
        props: {
			slug: 'manahatta',
			url: String,
			postdata: {
				type: Object,
				required: true,
			}
			
        },
		data() {
			return {		
				foo: this.$store.state.restaurants[this.slug],
				open: 'true',
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