<template>
	<form action="/workshops/betaling/" method="post">
		<input type="hidden" name="stripeToken" v-model="stripeToken">
		<input type="hidden" name="stripeEmail" v-model="stripeEmail">

		<div class="form-field">
			<!-- <input type="checkbox" id="terms" value="0">&nbsp; -->
			<label for="terms" required>Ved at gå til betaling accepterer du <a href="/handelsbetingelser" target="_blank">handelsbetingelserne</a></label>
		</div>
		
		<button class="btn" @click.prevent="buy">Gå til betaling</button>
	</form> 
</template>

<script>
	export default {

		props: ['workshops', 'email'],

		data() {
			return {
				stripeToken: '',
				stripeEmail: '',
			};
		},

		created() {
			this.stripe = StripeCheckout.configure({
				key: Business.stripeKey,
				locale: 'da',
				email: this.email,
				token: (token) => {
					this.stripeToken = token.id;
					this.stripeEmail = token.email;

					axios.post('/workshops/betaling/', this.$data)
						 .then(function (response) {
    						window.location.href = '/workshops/tilmeldt'
  						 })
				}
			});
		},

		methods: {
			buy() {
				this.stripe.open({
					name: 'Online Workshop',
					description: 'Dig & Din Business',
					currency: 'dkk',
					amount: 150000,
    				allowRememberMe: false
				});
			}
		}
	}
</script>
