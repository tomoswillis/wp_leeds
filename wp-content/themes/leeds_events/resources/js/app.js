/* eslint-disable no-new */

import Vue from 'node_modules/vue'
import Vuex from 'vuex'
import VCalendar from 'v-calendar';
import VueSlickCarousel from 'vue-slick-carousel'
import 'vue-slick-carousel/dist/vue-slick-carousel.css'
import 'vue-slick-carousel/dist/vue-slick-carousel-theme.css'



import event from './components/event'
import slider from './components/slider'
import eventslider from './components/eventslider'
import restaurant from './components/restaurant'
import restaurantsearch from './components/restaurantsearch'
import foo from './components/foo'
import restaurantresult from './components/restaurantresult'
import datepicker from './components/datepicker'


Vue.use(Vuex)
Vue.component("VueSlickCarousel", require("vue-slick-carousel"));
Vue.component("restaurant", restaurant);
Vue.component("restaurantsearch", restaurantsearch);
Vue.component('restaurantresult', restaurantresult);
Vue.component("event", event);
Vue.component("slider", slider);
Vue.use(VCalendar, {
	componentPrefix: 'vc',  // Use <vc-calendar /> instead of <v-calendar />..other defaults 
});

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
				'thumbnail': 'static/images/restaurants/manahatta/thumbnail.png',
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
				'thumbnail': 'static/images/restaurants/box/thumbnail.png',
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
				'thumbnail': 'static/images/restaurants/bills/thumbnail.png',
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
				'thumbnail': 'static/images/restaurants/byron/thumbnail.png',
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
				'thumbnail': 'static/images/events/ballet/thumbnail.png',
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
				'thumbnail': 'static/images/events/skyrack/thumbnail.png',
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
				'thumbnail': 'static/images/events/libary/thumbnail.png',
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
				'thumbnail': 'static/images/events/theFirstDirect/warHorse-thumbnail.png',
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
				'thumbnail': 'static/images/events/theFirstDirect/theCuriousDog-thumbnail.png',
				'bookingLink': 'http://www.test.com',
			},
		},
		time: ( new Date() ).toLocaleTimeString().split(/:| /),
	},
	
	mutations: {

	},

	actions: {
	},

});

new Vue({
	el: '#app',
	store,
	components: {
		event, 
		eventslider,
		slider, 
		restaurant, 
		datepicker,
		foo,
		restaurantsearch,
		restaurantresult,
		VueSlickCarousel, 
	},
});
