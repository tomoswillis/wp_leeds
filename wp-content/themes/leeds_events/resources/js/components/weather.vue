<template>
<div class="flex justify-between items-baseline">
	<div class="w-3/6 px-2">

	<!-- Vue if statement conditionally reders sv dependant on the data -->
		<div v-if="$data.weatherIcon === 'clouds'">
			<svg class="rain" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 33.64 18.08"><defs></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M27.41,6.12A5.71,5.71,0,0,0,25,6.66,8.51,8.51,0,0,0,16.82.5c-3.06,0-5.74,2.6-7.24,5a6.65,6.65,0,0,0-2.37-.44c-3.7,0-6.71,2-6.71,5.74a6.72,6.72,0,0,0,6.71,6.71H25.35c.83,0,1.33,0,2.06,0a5.73,5.73,0,1,0,0-11.46Z"/></g></g></svg>
		</div>
		<div v-else-if="$data.weatherIcon === 'sun'">
			<svg class="rain" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 21.25 21.25"><defs><radialGradient id="Super_Soft_Black_Vignette_2" cx="10.63" cy="10.63" r="5.09" gradientUnits="userSpaceOnUse"><stop offset="0.57" stop-color="#161412"/><stop offset="0.8" stop-color="#161412"/><stop offset="1" stop-color="#161412"/></radialGradient></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M10.63,6a4.6,4.6,0,1,0,4.59,4.6A4.6,4.6,0,0,0,10.63,6Z"/><path class="cls-2" d="M10.47,16.64a.58.58,0,0,0-.58.58v3.45a.58.58,0,0,0,.58.58.57.57,0,0,0,.57-.58V17.22A.57.57,0,0,0,10.47,16.64Z"/><path class="cls-2" d="M10.47,4.61A.57.57,0,0,0,11,4V.58A.57.57,0,0,0,10.47,0a.58.58,0,0,0-.58.58V4A.58.58,0,0,0,10.47,4.61Z"/><path class="cls-2" d="M20.67,10.05H17.22a.58.58,0,1,0,0,1.15h3.45a.58.58,0,1,0,0-1.15Z"/><path class="cls-2" d="M4.61,10.62A.58.58,0,0,0,4,10.05H.58a.58.58,0,1,0,0,1.15H4A.58.58,0,0,0,4.61,10.62Z"/><path class="cls-2" d="M4.82,14.93,2.37,17.37a.58.58,0,0,0,0,.81.57.57,0,0,0,.82,0l2.44-2.44a.58.58,0,0,0,0-.81A.56.56,0,0,0,4.82,14.93Z"/><path class="cls-2" d="M15.41,6.07l2.44-2.44A.57.57,0,1,0,17,2.82L14.6,5.26a.57.57,0,1,0,.81.81Z"/><path class="cls-2" d="M15.48,15.45a.58.58,0,0,0-.81,0,.59.59,0,0,0,0,.82l2.44,2.44a.57.57,0,0,0,.82,0,.58.58,0,0,0,0-.81Z"/><path class="cls-2" d="M3.3,3.27a.57.57,0,0,0-.82,0,.58.58,0,0,0,0,.81L4.93,6.53a.58.58,0,0,0,.81,0,.57.57,0,0,0,0-.82Z"/></g></g></svg>
		</div>
		<div v-else-if="$data.weatherIcon === 'rain'">
			<svg class="rain" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 26 20.78"><defs><radialGradient id="Super_Soft_Black_Vignette_2" cx="9.46" cy="11.23" r="1.48" gradientUnits="userSpaceOnUse"><stop offset="0.57" stop-color="#161412"/><stop offset="0.8" stop-color="#161412"/><stop offset="1" stop-color="#161412"/></radialGradient><radialGradient id="Super_Soft_Black_Vignette_2-2" cx="9.38" cy="15.88" r="1.48" xlink:href="#Super_Soft_Black_Vignette_2"/><radialGradient id="Super_Soft_Black_Vignette_2-3" cx="12.69" cy="14.33" r="1.48" xlink:href="#Super_Soft_Black_Vignette_2"/><radialGradient id="Super_Soft_Black_Vignette_2-4" cx="12.61" cy="18.99" r="1.48" xlink:href="#Super_Soft_Black_Vignette_2"/><radialGradient id="Super_Soft_Black_Vignette_2-5" cx="15.84" cy="11.76" r="1.48" xlink:href="#Super_Soft_Black_Vignette_2"/><radialGradient id="Super_Soft_Black_Vignette_2-6" cx="15.76" cy="16.42" r="1.48" xlink:href="#Super_Soft_Black_Vignette_2"/></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M19.54,13.54c.62,0,1,0,1.57,0a4.39,4.39,0,1,0-1.85-8.36A6.51,6.51,0,0,0,13,.5c-2.34,0-4.4,2-5.55,3.85A4.94,4.94,0,0,0,5.64,4C2.8,4,.5,5.56.5,8.4a5.14,5.14,0,0,0,4.83,5.13"/><path class="cls-2" d="M9.51,9.43c-.6,0-1.11,1.9-1.13,2.49a1.08,1.08,0,1,0,2.16,0C10.55,11.37,10.1,9.44,9.51,9.43Z"/><path class="cls-3" d="M9.42,14.09c-.59,0-1.11,1.9-1.12,2.49a1.08,1.08,0,1,0,2.15,0C10.46,16,10,14.1,9.42,14.09Z"/><path class="cls-4" d="M12.74,12.54c-.6,0-1.11,1.89-1.12,2.49a1.08,1.08,0,0,0,2.15,0C13.78,14.47,13.33,12.55,12.74,12.54Z"/><path class="cls-5" d="M12.65,17.2c-.59,0-1.11,1.89-1.12,2.49a1.08,1.08,0,0,0,2.15,0C13.69,19.13,13.25,17.21,12.65,17.2Z"/><path class="cls-6" d="M15.82,13.55a1.08,1.08,0,0,0,1.1-1.06c0-.59-.44-2.51-1-2.52s-1.11,1.89-1.12,2.49A1.07,1.07,0,0,0,15.82,13.55Z"/><path class="cls-7" d="M15.8,14.62c-.59,0-1.1,1.9-1.11,2.49a1.07,1.07,0,1,0,2.14,0C16.85,16.56,16.4,14.64,15.8,14.62Z"/></g></g></svg>
		</div>
		<div v-else-if="$data.weatherIcon === 'clear'">
			<svg class="clearIcon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 18.81 20.26"><defs><radialGradient id="Super_Soft_Black_Vignette_2" cx="9.4" cy="4.57" r="7.39" gradientUnits="userSpaceOnUse"><stop offset="0.57" stop-color="#161412"/><stop offset="0.8" stop-color="#161412"/><stop offset="1" stop-color="#161412"/></radialGradient><radialGradient id="Super_Soft_Black_Vignette_2-2" cx="7.39" cy="15.68" r="6.14" xlink:href="#Super_Soft_Black_Vignette_2"/></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_2-2" data-name="Layer 2"><path class="cls-1" d="M18.81,4.57A4.58,4.58,0,0,0,14.24,0V1.37a3.2,3.2,0,0,1,0,6.39H0V9.15H14.27A4.58,4.58,0,0,0,18.81,4.57Z"/><path class="cls-2" d="M14.77,15.69a4.57,4.57,0,0,1-4.57,4.57V18.89a3.2,3.2,0,0,0,0-6.4H0V11.11H10.24A4.58,4.58,0,0,1,14.77,15.69Z"/></g></g></svg>
		</div>
		<div v-else>
			Not A/B/C
		</div>
	</div>
	<div>
			<h2 class="text-3xl font-bold text-opacity-25">{{$data.temp}}c</h2>
		</div>
</div>
</template>

<script>
	export default {
        props: {

        },
		data() {
			return {
				 temp: 0,
				 weatherIcon: 'clouds',
			};
		},  
		computed: {
			currentWeather() {
				setTimeout(() => {
					let i = this.$store.state.weather.weather[0].main;
					this.$data.weatherIcon = i.toLowerCase();
				}, 2000);
			},
			
			// gets the temp data from the store and converts it to celcius from Kelvin and rounds it to 2 decimal places. set time out is used as the data isnt avalible directly after load
			currentTemp () {
				setTimeout(() => {
					let i = Math.round((this.$store.state.weather.main.temp - 273.15) * 10) / 10;
					this.$data.temp = i;
				}, 2000);
				
			}
        },
        
        methods: {
			
		},
		
		mounted () {
		 this.currentTemp;
		 this.currentWeather;
		}
	};
</script>