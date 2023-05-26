<script>
export default {
	setup() {
		return {
			bios: [
				{
					id: 1,
					bio:
						'Hello! Thank you for checking out my portfolio. I hope it has been enticing so far. Here I will give you some more information about me and my background in software development.',
				},
				{
					id: 2,
					bio:
						"I started gaining interest in coding classes back in the middle of 2017. Within a year from that time, I had taken JavaScript, HTML and CSS courses at Portland Community College and had earned a certificate in Web Design - maintaining a 4.0 GPA along the way. Shortly after this, I had applied to an open web developer position at a local credit union. It was here where I would land my first software development job and begin my rewarding career in software development.",
				},
				{
					id: 5,
					bio:
						"The credit union had many banking related apps that needed to be developed and maintained by the small team of developers it employed. It's online presence was growing and needing to keep up with the ever evolving technology being used for software development. So there was always a ton to do, and my three and a half year journey here gave me a lot of experience with all sorts of projects - which ultimately trained me how to be a true full-stack developer.",
				},
				{
					id: 6,
					bio:
						"By April 2022, I had made a decision to increase my development experience and compensation, so I made the move from the credit union to a digital media company called Gray TV. In my role as a Digital Applications Developer at Gray TV, I have learned a great deal about the way software can be integrated with media outlets.",
				},
				{
					id: 3,
					bio:
						'Throughout my career in software development, my meticulous attention to detail and a steadfast commitment to writing clean, testable, maintainable code have consistently yielded high-quality software products. Proficient in both front-end and back-end development, I strive to create seamless user experiences while ensuring robust functionality and scalability.',
				},
				{
					id: 4,
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
