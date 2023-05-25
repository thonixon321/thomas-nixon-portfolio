<script>
export default {
	setup() {
		return {
			bios: [
				{
					id: 1,
					bio:
						'My meticulous attention to detail and a steadfast commitment to writing clean, maintainable code have consistently yielded high-quality software products. Proficient in both front-end and back-end development, I strive to create seamless user experiences while ensuring robust functionality and scalability.',
				},
				{
					id: 2,
					bio:
						'With an unwavering passion for innovation and a relentless drive to learn and adapt, I eagerly anticipate the exciting opportunities and new technologies that lie ahead on my continued path as a software developer.',
				},
			],
		};
	},
};
</script>

<template>
	<div class="block sm:flex sm:gap-10 mt-10 sm:mt-20">
		<!-- About profile image -->
		<div class="w-full sm:w-1/4 mb-7 sm:mb-0">
			<img
				src="@/assets/images/profile.jpg"
				class="rounded-xl w-96"
				alt=""
			/>
		</div>

		<!-- About details -->
		<div class="w-full sm:w-3/4 text-left">
			<p
				v-for="bio in bios"
				:key="bio.id"
				class="font-general-regular mb-4 text-ternary-dark dark:text-ternary-light text-lg"
			>
				{{ bio.bio }}
			</p>
		</div>
	</div>
</template>
