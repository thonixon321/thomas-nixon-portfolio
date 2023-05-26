<script>
import Button from '../components/reusable/Button.vue';

export default {
	name: 'EmailSuccess',
	components: {
		Button,
	},
};
</script>

<template>
    <div class="container mx-auto">
        <img src="../assets/images/thanks.jpg" alt="thank you image">
        <h1 class="font-general-medium text-primary-dark dark:text-primary-light text-3xl my-2">Thanks for reaching out!</h1>
        <h4 class="font-general-medium text-primary-dark dark:text-primary-light text-xl mb-3">I will be in touch soon.</h4>
        <div class="flex justify-center">
            <router-link
                    to="/"
                    class="font-general-medium flex items-center px-6 py-3 rounded-lg shadow-lg hover:shadow-xl bg-indigo-500 hover:bg-indigo-600 focus:ring-1 focus:ring-indigo-900 text-white text-lg sm:text-xl duration-300"
                    aria-label="Return Home"
                >
                    <Button title="Return Home" />
            </router-link>
        </div>
    </div>
</template>