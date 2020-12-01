/* eslint-disable no-new */

import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import VCalendar from 'v-calendar';
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'


import event from './components/event'
import slider from './components/slider'
import eventslider from './components/eventslider'
import restaurant from './components/restaurant'
import restaurantsearch from './components/restaurantsearch'
import restaurantresult from './components/restaurantresult'
import datepicker from './components/datepicker'
import mapbox from './components/mapbox'
import searchresult from './components/searchresult'
import weather from './components/weather'



Vue.use(Vuex)
Vue.component("VueSlickCarousel", require("vue-slick-carousel"));
Vue.component("restaurant", restaurant);
Vue.component("restaurantsearch", restaurantsearch);
Vue.component('restaurantresult', restaurantresult);
Vue.component('mapbox', mapbox);
Vue.component("event", event);
Vue.component("slider", slider);
Vue.use(VCalendar, {
	componentPrefix: 'vc',  // Use <vc-calendar /> instead of <v-calendar />..other defaults 
});

// Store is used as a data store for VueX, this is accessible globally
const store = new Vuex.Store({
	state: {
		restaurants: {
			'manahatta': {
				'id': 1,
				'name': 'Manahatta',
				'category': 'cocktailBar',
				'location': {
					'streetName': 'foobar',
					'streetNumb': '2',
					'postcode': '234 foobar',
					'shortHand': 'leeds city centre'
					},
				'accessability': {
					'wifi': true,
					'covidsafe': true,
					'childFriendly': false,
					'disabledAccess': true,
					'dogFriendly': false,
					'privateHire': true,
				},
				'description': 'Located in the heart of Headingley, Leeds, Manahatta is a glamorous New York inspired cocktail bar, set across two floors',
				'thumbnail': 'wp-content/themes/leeds_events/public/static/images/restaurants/manahatta/thumbnail.png',
				'times': {
					'open': {
						'hour': 10,
						'minute': 10,
					},
					'close': {
						'hour': 15,
						'minute': 10,
					},
				},

				'rating': 4,
				'averageCost':25,
			},
			'box': {
				'id': 2,
				'name': 'Box',
				'category': 'cocktailBar',
				'location': {
					'streetName': 'foobar',
					'streetNumb': '2',
					'postcode': '234 foobar',
					'shortHand': 'leeds city centre'
					},
				'accessability': {
					'wifi': true,
					'covidsafe': true,
					'childFriendly': false,
					'disabledAccess': true,
					'dogFriendly': false,
					'privateHire': true,
				},
				'description': 'We’re an award-winning sports bar based in the centre of Leeds serving the best food & drink. Join us for sport, shuffleboard and cocktails.',
				'thumbnail': 'wp-content/themes/leeds_events/public/static/images/restaurants/box/thumbnail.png',
				'times': {
					'open': {
						'hour': 10,
						'minute': 10,
					},
					'close': {
						'hour': 15,
						'minute': 10,
					},
				},
				'rating': 4,
			},
			'bills': {
				'id': 3,
				'name': 'Bills',
				'category': 'burger Restaurant',
				'location': {
					'streetName': 'foobar',
					'streetNumb': '2',
					'postcode': '234 foobar',
					'shortHand': 'leeds city centre'
					},
				'accessability': {
					'wifi': true,
					'covidsafe': true,
					'childFriendly': false,
					'disabledAccess': true,
					'dogFriendly': false,
					'privateHire': true,
				},
				'description': 'Bill’s is a place for every occasion whether you want a quick breakfast with colleagues or you are celebrating a special birthday dinner with friends and family.',
				'thumbnail': 'wp-content/themes/leeds_events/public/static/images/restaurants/bills/thumbnail.png',
				'times': {
					'open': {
						'hour': 10,
						'minute': 10,
					},
					'close': {
						'hour': 15,
						'minute': 10,
					},
				},
				'rating': 4,
			},
			'byron': {
				'id': 4,
				'name': 'Byron Burgers',
				'category': 'burger joint',
				'location': {
					'streetName': 'foobar',
					'streetNumb': '2',
					'postcode': '234 foobar',
					'shortHand': 'leeds city centre'
					},
					'accessability': {
						'wifi': true,
						'covid-safe': true,
						'child-friendly': false,
						'disabled-access': true,
						'dog-friendly': false,
						'private-hire': true,
					},
				'description': 'American-inspired chain diner serving posh hamburgers with a choice of toppings, sides and salads.',
				'thumbnail': 'wp-content/themes/leeds_events/public/static/images/restaurants/byron/thumbnail.png',
				'times': {
					'open': {
						'hour': 10,
						'minute': 10,
					},
					'close': {
						'hour': 15,
						'minute': 10,
					},
				},

				'rating': 4,
			},
		},
		events: {
			'swanLake': {
				'id': 1,
				'name': 'Swan Lake',
				'venue': 'northen ballet',
				'date': {
					'date': 20,
					'month': "october",
					'day': 'monday',
					},
				'location': {
					'streetName': 'foobar',
					'streetNumb': '2',
					'postcode': '234 foobar',
					'shortHand': 'leeds city centre'
					},
				'description': '"Swan Lake" is a timeless love story that mixes magic, tragedy, and romance into four acts. It features Prince Siegfried and a lovely swan princess named Odette.',
				'cost': 10.55,
				'thumbnail': 'wp-content/themes/leeds_events/public/static/images/events/ballet/thumbnail.png',
				'bookingLink': 'http://www.test.com',
			},
			'beerPong': {
				'id': 1,
				'name': 'Beer Pong',
				'venue': 'Skyrack',
				'date': {
					'date': 15,
					'month': "october",
					'day': 'wednesday',
					},
				'location': {
					'streetName': 'foobar',
					'streetNumb': '2',
					'postcode': '234 foobar',
					'shortHand': 'Headingley'
					},
				'description': 'Beer pong competition, the winner receives a £100 voucher',
				'cost': 0,
				'thumbnail': 'wp-content/themes/leeds_events/public/static/images/events/skyrack/thumbnail.png',
				'bookingLink': 'http://www.test.com',
			},
			'treeKicks': {
				'id': 1,
				'name': 'Tree Kicks',
				'venue': 'The Libary',
				'date': {
					'date': 18,
					'month': "october",
					'day': 'sunday',
					},
				'location': {
					'streetName': 'foobar',
					'streetNumb': '2',
					'postcode': '234 foobar',
					'shortHand': 'Headingley'
					},
				'description': 'The new up and coming band, Tree Kicks will be daubing their Latest album',
				'cost': 25.00,
				'thumbnail': 'wp-content/themes/leeds_events/public/static/images/events/libary/thumbnail.png',
				'bookingLink': 'http://www.test.com',
			},
			'warHorse': {
				'id': 1,
				'name': 'War Horse',
				'venue': 'First Direct Areana',
				'date': {
					'date': 25,
					'month': "october",
					'day': 'sunday',
					},
				'location': {
					'streetName': 'foobar',
					'streetNumb': '2',
					'postcode': '234 foobar',
					'shortHand': 'Leeds City Centre'
					},
				'description': 'War horse start a new tour of the UK, 5 starts, an incredible experience',
				'cost': 22,
				'thumbnail': 'wp-content/themes/leeds_events/public/static/images/events/theFirstDirect/warHorse-thumbnail.png',
				'bookingLink': 'http://www.test.com',
			},
			'curiousIncident': {
				'id': 1,
				'name': 'The Curious Incident',
				'venue': 'First Direct Areana',
				'date': {
					'date': 25,
					'month': "october",
					'day': 'sunday',
					},
				'location': {
					'streetName': 'foobar',
					'streetNumb': '2',
					'postcode': '234 foobar',
					'shortHand': 'Leeds City Centre'
					},
				'description': 'The Curious Incident of the Dog in the Night-Time is a play by Simon Stephens based on the novel of the same name by Mark Haddon.',
				'cost': 26.00,
				'thumbnail': 'wp-content/themes/leeds_events/public/static/images/events/theFirstDirect/theCuriousDog-thumbnail.png',
				'bookingLink': 'http://www.test.com',
			},
		},
		time: ( new Date() ).toLocaleTimeString().split(/:| /),
		restaurantsPosts: [],
		weather: [],
	},

	getters: {
		getRestaurantPost: (state) => (id) => {
		  return state.restaurantsPosts.find(posts => posts.id === id)
		},

		getManyRestaurants: (state) => (data) => {
			return state.restaurantsPosts.filter(function(e) {
				return data.indexOf(e.id) != -1;
			})
		},
	  },
	// Actions are something that goes and does something e.g get data
	actions: {
		// load posts gets all restaurant posts from the WP rest api and then commits it to updatePosts (Mutation) with the json as a payload
		async loadPosts({ commit }) {
			axios
				.get('http://localhost/wordpress/wp-json/wp/v2/restaurant')
				.then(data => {
					let payload = data.data
					commit('updatePosts', payload)
				})
				.catch(error => {
					console.log(error);
				})
		},

		// the weather data is accessible via the WP API  
		async loadWeather({ commit }) {
			axios
				.get('http://localhost/wordpress/wp-json/lw/v1/weather')
				.then(data => {
					let payload = data.data
					commit('updateWeather', payload)
				})
				.catch(error => {
					console.log(error);
				})
		},

	},
	// used to update the state
	mutations: {
		// update Posts takes the payload given to it and updates the restaurants state. state is passed so it can access it.
		updatePosts (state, payload){
			state.restaurantsPosts = payload
		},

		updateWeather (state, payload){
			state.weather = payload
		},
	},


});

import { mapGetters } from 'vuex';

new Vue({
	el: '#app',
	store,
	components: {
		event, 
		eventslider,
		mapbox, 
		searchresult,
		slider, 
		restaurant, 
		datepicker,
		restaurantsearch,
		restaurantresult,
		weather,
		VueSlickCarousel,
		
	},

	data() {
		return{
			idData: ['125', '119', '125']
		}
	},

	computed: {
		...mapGetters([
			'getManyRestaurants',
			
		  ]),

		homePagepostIDs() {
			return this.$data.idData.map((data)=>{  
				return this.$store.getters.getManyRestaurants(data)[0]; 
			}) 
		},

		restaurantPosts() {
			return this.$store.state.restaurantsPosts
		},
		
	},

	method:{

	},

	//  mounted: loads in after the dom is fully loaded. Here we are telling the actions to run to get the api data
	mounted() {
		this.$store.dispatch('loadPosts')
		this.$store.dispatch('loadWeather')

	
		
	},

}); 

