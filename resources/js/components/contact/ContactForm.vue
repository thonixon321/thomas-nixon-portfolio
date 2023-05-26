<script>
import Button from '../reusable/Button.vue';
import FormInput from '../reusable/FormInput.vue';
import FormTextarea from '../reusable/FormTextarea.vue';
import axios from 'axios';
import router from '../../router';

export default {
	data() {
		return {
			form: {
				name: '',
				email: '',
				subject: '',
				message: ''
			},
			formLoad: false
		}
	},
	methods: {
		submitEmail() {
			let self = this;
			console.log(this.form)
			this.formLoad = true;
			axios.post('/api/send-mail', this.form)
			.then(function (response) {
				console.log(response);
				self.formLoad = false;
				//redirect to a success page and thank you for contacting me
				router.push({path: '/email-success'});
			})
			.catch(function (error) {
				console.log(error);
			});
		}
	},
	components: { Button, FormInput, FormTextarea } 
};
</script>

<template>
	<div class="w-full md:w-1/2">
		<div
			class="leading-loose max-w-xl m-4 p-7 bg-secondary-light dark:bg-secondary-dark rounded-xl shadow-xl text-left"
		>
			<p
				class="font-general-medium text-primary-dark dark:text-primary-light text-2xl mb-8"
			>
				Contact Form
			</p>
			<form @submit.prevent="submitEmail" class="font-general-regular space-y-7">
				<FormInput v-model="form.name" label="Full Name" inputIdentifier="name" required />
				<FormInput
					v-model="form.email"
					label="Email"
					inputIdentifier="email"
					inputType="email"
					required
				/>
				<FormInput v-model="form.subject" label="Subject" inputIdentifier="subject" required />
				<FormTextarea v-model="form.message" label="Message" textareaIdentifier="message" required />

				<div>
					<Button
						title="Send Message"
						class="px-4 py-2.5 text-white tracking-wider bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 rounded-lg duration-500"
						type="submit"
						aria-label="Send Message"
						:loading="formLoad"
					/>
				</div>
			</form>
		</div>
	</div>
</template>

<style lang="scss" scoped></style>
