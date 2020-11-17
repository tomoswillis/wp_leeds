<template>
<div class="mt-10">
	
	<div class="text-3xl mx-8 font-bold pt-5 text-gray-600 flex items-center flex-wrap">
		<h1>{{data.name}}: {{data.location.shortHand}}</h1>
		<div class="ml-5">
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
	</div>
	<div class="bg-gray-200 pb-5 mb-10">
		<div class=" xl:flex xl:m-5 xl:justify-between xl:px-5 ">
			<div class="px-5 pt-5 mt-5 md:flex xl:w-3/5 ">
				<div class="md:mr-5">
					<img :src="data.thumbnail" alt="rest thumbnail">
				</div>
				<div class="xl:w-4/5">
					<p class="text-orange-500 my-2">{{data.category}}</p>
					<p class="font-light">{{data.description}}</p>
					<p class="my-5">Average Cost £{{data.averageCost}}</p>
					<div class="text-sm flex justify-between md:justify-start lg:flex-col">
						<div class="md:mr-5 lg:flex">
							<div class="flex items-center my-3 lg:mr-5 opacity-25" v-bind:class="{ 'opacity-100': data.accessability.disabledAccess}">
								<span class="material-icons">accessible</span>
								<p class="inline">Disabled Access</p>
							</div>
							<div class="flex items-center my-3 lg:mr-5 opacity-25" v-bind:class="{ 'opacity-100': data.accessability.covidsafe}">
								<svg fill="none" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
									<path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" d="M12 4C10.3523 4 9 5.35228 9 7V10H15V7C15 5.35228 13.6477 4 12 4ZM17 10V7C17 4.24772 14.7523 2 12 2C9.24771 2 7 4.24772 7 7V10H6C4.89543 10 4 10.8954 4 12V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V12C20 10.8954 19.1046 10 18 10H17ZM6 12V20H18V12H6Z" fill="#282828"></path>
								</svg>
								<p>Covid Safe</p>
							</div>
							<div class="flex items-center my-3 lg:mr-5 opacity-25" v-bind:class="{ 'opacity-100': data.accessability.childFriendly}">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M13 2v8h8c0-4.42-3.58-8-8-8zm2 6V4.34c1.7.6 3.05 1.95 3.66 3.66H15zm-8.56 3l-.95-2H2v2h2.22s1.89 4.07 2.12 4.42c-1.1.59-1.84 1.75-1.84 3.08C4.5 20.43 6.07 22 8 22c1.76 0 3.22-1.3 3.46-3h2.08c.24 1.7 1.7 3 3.46 3 1.93 0 3.5-1.57 3.5-3.5 0-1.04-.46-1.97-1.18-2.61C20.37 14.54 21 12.84 21 11H6.44zM8 20c-.83 0-1.5-.67-1.5-1.5S7.17 17 8 17s1.5.67 1.5 1.5S8.83 20 8 20zm9 0c-.83 0-1.5-.67-1.5-1.5S16.17 17 17 17s1.5.67 1.5 1.5S17.83 20 17 20zm.74-5.34l-.29.37c-.14-.02-.3-.03-.45-.03-1.39 0-2.6.82-3.16 2h-2.68c-.5-1.04-1.5-1.8-2.68-1.97l-.44-.67c-.1-.17-.34-.69-.67-1.36h11.29c-.21.59-.52 1.15-.92 1.66z"/></svg>
								<p>Child Friendly</p>
							</div>
						</div>
						<div class="lg:flex">
							<div class="flex items-center my-3 lg:mr-5 opacity-25" v-bind:class="{ 'opacity-100': data.accessability.privateHire}">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="black" width="24px" height="24px"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M18.98 17H2v2h20v-2zM21 16c-.27-4.07-3.25-7.4-7.16-8.21.1-.24.16-.51.16-.79 0-1.1-.9-2-2-2s-2 .9-2 2c0 .28.06.55.16.79C6.25 8.6 3.27 11.93 3 16h18zm-9-6.42c2.95 0 5.47 1.83 6.5 4.41h-13c1.03-2.58 3.55-4.41 6.5-4.41z"/>
								</svg>
								<p>Private Hire</p>
							</div>
							<div class="flex items-center my-3 lg:mr-5 opacity-25" v-bind:class="{ 'opacity-100': data.accessability.dogFriendly}">
								<span class="material-icons">pets</span>
								<p>Animal Friendly</p>
							</div>
							<div class="flex items-center my-3 lg:mr-5 opacity-25" v-bind:class="{ 'opacity-100': data.accessability.wifi}">
								<span class="material-icons">wifi</span>
								<p>Wifi</p>
							</div>
						</div>
					</div>
					<div class="w-full bg-orange-400 text-center rounded-md py-2 my-5 xl:px-5 xl:w-40 l-button text-white">
						<p class=" text-lg xl:text-lg">View Site</p>
					</div>
				</div>
			</div>
			<!-- Map -->
			<div class="xl:w-1/3 xl:my-5 xl:mr-5">
				<svg fill="none" viewBox="0 0 24 24" height="30" width="30" xmlns="http://www.w3.org/2000/svg" class="inline ml-2">
					<path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" d="M12 4C8.68629 4 6 6.68629 6 10C6 11.0279 6.36394 12.1768 6.9815 13.3678C7.59457 14.5501 8.4236 15.7092 9.27193 16.7393C10.1178 17.7664 10.9665 18.6457 11.6048 19.2688C11.7483 19.4089 11.8809 19.5357 12 19.6481C12.1191 19.5357 12.2517 19.4089 12.3952 19.2688C13.0335 18.6457 13.8822 17.7664 14.7281 16.7393C15.5764 15.7092 16.4054 14.5501 17.0185 13.3678C17.6361 12.1768 18 11.0279 18 10C18 6.68629 15.3137 4 12 4ZM12 21C11.3492 21.7593 11.349 21.7591 11.3488 21.7589L11.3467 21.7571L11.3417 21.7528L11.3241 21.7376C11.3092 21.7246 11.2878 21.7059 11.2604 21.6818C11.2055 21.6334 11.1266 21.5632 11.0269 21.4727C10.8277 21.2918 10.5454 21.0296 10.2077 20.6999C9.5335 20.0418 8.63218 19.1086 7.72807 18.0107C6.8264 16.9158 5.90543 15.6374 5.206 14.2884C4.51106 12.9482 4 11.4721 4 10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10C20 11.4721 19.4889 12.9482 18.794 14.2884C18.0946 15.6374 17.1736 16.9158 16.2719 18.0107C15.3678 19.1086 14.4665 20.0418 13.7923 20.6999C13.4546 21.0296 13.1723 21.2918 12.9731 21.4727C12.8734 21.5632 12.7945 21.6334 12.7396 21.6818C12.7122 21.7059 12.6908 21.7246 12.6759 21.7376L12.6583 21.7528L12.6533 21.7571L12.6517 21.7585C12.6515 21.7586 12.6508 21.7593 12 21ZM12 21L11.3488 21.7589C11.7233 22.0799 12.2763 22.0802 12.6508 21.7593L12 21ZM12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8ZM8 10C8 7.79086 9.79086 6 12 6C14.2091 6 16 7.79086 16 10C16 12.2091 14.2091 14 12 14C9.79086 14 8 12.2091 8 10Z" fill="#f6ad55"></path>
				</svg> 
				<h2 class="inline text-xl">Details</h2>
				<div class="bg-white px-5 py-5 mt-5 rounded-lg">
					<div id='map' class="w-full h-64 bg-black text-white center">
						map
					</div>
					<div class="mt-2 mx-2 my-5">
						<svg fill="none" class='inline' viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
							<path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" d="M12 4C8.68629 4 6 6.68629 6 10C6 11.0279 6.36394 12.1768 6.9815 13.3678C7.59457 14.5501 8.4236 15.7092 9.27193 16.7393C10.1178 17.7664 10.9665 18.6457 11.6048 19.2688C11.7483 19.4089 11.8809 19.5357 12 19.6481C12.1191 19.5357 12.2517 19.4089 12.3952 19.2688C13.0335 18.6457 13.8822 17.7664 14.7281 16.7393C15.5764 15.7092 16.4054 14.5501 17.0185 13.3678C17.6361 12.1768 18 11.0279 18 10C18 6.68629 15.3137 4 12 4ZM12 21C11.3492 21.7593 11.349 21.7591 11.3488 21.7589L11.3467 21.7571L11.3417 21.7528L11.3241 21.7376C11.3092 21.7246 11.2878 21.7059 11.2604 21.6818C11.2055 21.6334 11.1266 21.5632 11.0269 21.4727C10.8277 21.2918 10.5454 21.0296 10.2077 20.6999C9.5335 20.0418 8.63218 19.1086 7.72807 18.0107C6.8264 16.9158 5.90543 15.6374 5.206 14.2884C4.51106 12.9482 4 11.4721 4 10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10C20 11.4721 19.4889 12.9482 18.794 14.2884C18.0946 15.6374 17.1736 16.9158 16.2719 18.0107C15.3678 19.1086 14.4665 20.0418 13.7923 20.6999C13.4546 21.0296 13.1723 21.2918 12.9731 21.4727C12.8734 21.5632 12.7945 21.6334 12.7396 21.6818C12.7122 21.7059 12.6908 21.7246 12.6759 21.7376L12.6583 21.7528L12.6533 21.7571L12.6517 21.7585C12.6515 21.7586 12.6508 21.7593 12 21ZM12 21L11.3488 21.7589C11.7233 22.0799 12.2763 22.0802 12.6508 21.7593L12 21ZM12 8C10.8954 8 10 8.89543 10 10C10 11.1046 10.8954 12 12 12C13.1046 12 14 11.1046 14 10C14 8.89543 13.1046 8 12 8ZM8 10C8 7.79086 9.79086 6 12 6C14.2091 6 16 7.79086 16 10C16 12.2091 14.2091 14 12 14C9.79086 14 8 12.2091 8 10Z" fill="#282828"></path>
						</svg> 
						<h2 class="inline">{{data.location.streetNumb}} {{data.location.streetName}} {{data.location.postcode}}</h2>
					</div>
					<div class="mx-2 my-5">
						<svg fill="none" viewBox="0 0 24 24" class="inline" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
							<path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" d="M6 5C6 3.89543 6.89543 3 8 3H16C17.1046 3 18 3.89543 18 5V19C18 20.1046 17.1046 21 16 21H8C6.89543 21 6 20.1046 6 19V5ZM16 5H8V19H16V5Z" fill="#282828"></path>
							<path xmlns="http://www.w3.org/2000/svg" d="M13 17C13 17.5523 12.5523 18 12 18C11.4477 18 11 17.5523 11 17C11 16.4477 11.4477 16 12 16C12.5523 16 13 16.4477 13 17Z" fill="#282828"></path>
						</svg>
						<h2 class="inline">{{data.number}}09876</h2>
					</div>
					<div class="mx-2 my-5">
						<svg fill="none" class="inline" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
							<path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" d="M2 6C2 4.89543 2.89543 4 4 4H20C21.1046 4 22 4.89543 22 6V18C22 19.1046 21.1046 20 20 20H4C2.89543 20 2 19.1046 2 18V6ZM5.51859 6L12 11.6712L18.4814 6H5.51859ZM20 7.32877L12.6585 13.7526C12.2815 14.0825 11.7185 14.0825 11.3415 13.7526L4 7.32877V18H20V7.32877Z" fill="#282828"></path>
						</svg>
						<h2 class="inline">Email</h2>
						<svg fill="none" class="inline ease-in-out transform hover:translate-x-2
					duration-150" viewBox="0 0 24 24" height="24" width="24" xmlns="http://www.w3.org/2000/svg">
							<path xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" d="M12.2929 5.29289C12.6834 4.90237 13.3166 4.90237 13.7071 5.29289L19.7071 11.2929C19.8946 11.4804 20 11.7348 20 12C20 12.2652 19.8946 12.5196 19.7071 12.7071L13.7071 18.7071C13.3166 19.0976 12.6834 19.0976 12.2929 18.7071C11.9024 18.3166 11.9024 17.6834 12.2929 17.2929L16.5858 13L5 13C4.44772 13 4 12.5523 4 12C4 11.4477 4.44772 11 5 11L16.5858 11L12.2929 6.70711C11.9024 6.31658 11.9024 5.68342 12.2929 5.29289Z" fill="#f6ad55"></path>
						</svg>
					</div>
				</div>
			</div>
		</div>
		<div>
			
		</div>
		<div class="lg:flex lg:justify-between lg:px-16">
			<!-- top reviews -->
			<div class="bg-white rounded-lg p-5 mt-10 lg:w-2/4 lg:mr-2 xl:my-2">
				<h2 class="text-xl">Top Reviews</h2>
				<div class="ml-2 bg-gray-200 p-2 rounded-lg mt-5">
					<div class="flex items-center">
						<div class="h-12 w-12 rounded-full bg-orange-200  transform -translate-y-5 -translate-x-5">
							<img src="" alt="">
						</div>
						<p>Jessica Myers</p>
						<div class="ml-2">
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
					</div>
					<p class="font-light">
						We came on Saturday night. Super busy. We were greeted by lovely people. India was amazing all night! She checked we had drinks all night and was lovely to speak to. What an asset to the team!
					</p>
				</div>
				<div class="w-full bg-orange-400 text-center rounded-md py-2 my-5 xl:px-5 xl:w-40 text-white l-button">
					<p class=" text-lg xl:text-lg">All Reviews</p>
				</div>
			</div>
			<!-- Q&A -->
			<div class="bg-white rounded-lg p-5 mt-10 lg:w-3/4 lg:ml-2 xl:mt-2">
				<h2 class="text-xl">Questions & Answers</h2>
				<div class="mb-10 md:flex md:justify-between">
					<div class="w-1/2 p-2 bg-orange-400 text-center rounded-md my-5 md:w-2/5 text-white l-button">
						<p class=" text-sm xl:text-lg">Ask A Question</p>
					</div>
					<div class="sm:w-1/5 md:w-2/5">
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
				<div class="ml-2 bg-gray-200 py-2 pl-2 pr-5 rounded-lg mt-5">
					<div class="flex items-center">
						<div class="h-12 w-12 rounded-full bg-orange-200  transform -translate-y-5 -translate-x-5">
							<img src="" alt="">
						</div>
						<p>Jessica Myers</p>
						
					</div>
					<div class="ml-5">
						<p class="font-light">
							Do they accept bookings?
						</p>
						<input type="text" placeholder="Enter your answer here" class=" w-4/5 pl-2 my-5 py-2 w-full">
						<div class="w-1/2 bg-orange-400 text-center rounded-md mb-5 py-2 xl:px-5 xl:w-40 text-white l-button">
							<p class=" text-sm xl:text-lg">Submit</p>
						</div>

					</div>
				</div>
				
			</div>
		</div>
	</div>

	<h2 class="text-2xl mx-2 lg:mx-16 font-bold pt-5 text-gray-600">
		Other Restaurants You Might Like
	</h2>
	<slider 
		slug-one='manahatta'
		slug-two='box'
		slug-three='byron' 
		slug-four='bills'
		class="lg:mt-5 lg:ml-16">
	</slider>
</div>
</template>

<script>
	export default {
        props: {
			current_post:{
				type: Object,
				required: true,
			},
		},
		
		data() {
			return {		
				open: 'true',
				slug: 'manahatta',
			};
		},  
		computed: {
			data() {
				return this.$store.state.restaurants[this.$data.slug];	
			},
        },
        
        methods: {
			
		},	
	};
</script>