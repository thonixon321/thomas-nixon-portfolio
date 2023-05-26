<script>
import feather from 'feather-icons';
import ProjectHeader from '../../components/projects/ProjectHeader.vue';
import ProjectGallery from '../../components/projects/ProjectGallery.vue';
import ProjectInfo from '../../components/projects/ProjectInfo.vue';
import ProjectRelatedProjects from '../../components/projects/ProjectRelatedProjects.vue';

export default {
	name: 'Projects',
	components: {
		ProjectHeader,
		ProjectGallery,
		ProjectInfo,
		ProjectRelatedProjects,
	},
	data: () => {
		return {
			singleProjectHeader: {
				singleProjectTitle: 'Touch-board Desktop App',
				singleProjectDate: 'July 15, 2022',
				singleProjectTag: 'Desktop Application',
			},
			projectImages: [
				{
					id: 1,
					title: 'Touchboard Desktop App',
					img: '../assets/images/touchboard-before-after.png',
				},
				{
					id: 2,
					title: 'Touchboard Desktop App',
					img: '../assets/images/touchboard-scores.png',
				},
				{
					id: 3,
					title: 'Touchboard Desktop App',
					img: '../assets/images/touchboard-countdown.png',
				},
			],
			projectInfo: {
				clientHeading: 'About Client',
				companyInfos: [
					{
						id: 1,
						title: 'Name',
						details: 'Gray TV',
					},
					{
						id: 2,
						title: 'Services',
						details: 'Television Broadcasting',
					},
					{
						id: 3,
						title: 'Website',
						details: 'https://gray.tv',
					},
					{
						id: 4,
						title: 'Phone',
						details: '888-835-2869',
					},
				],
				objectivesHeading: 'Objective',
				objectivesDetails:
					'Build a desktop app that can be downloaded onto news station computers and used in on-air presentations via Touch-board to show Election results, School Closings, Local Gas Prices, Sports Scores, interactive slideshows and images, etc.',
				technologies: [
					{
						title: 'Tools & Technologies',
						techs: [
							'HTML',
							'CSS',
							'JavaScript',
							'Vue.js',
                            'Electron.js',
							'Interact.js',
                            'D3.js'
						],
					},
				],
				projectDetailsHeading: 'Challenge',
				projectDetails: [
					{
						id: 1,
						details:
							"Thirteen unique and interactive touch-board applications rolled into one professional-looking easy-to-use desktop app that will be used in newscasts and shown to thousands of viewers? No problem!",
					},
					{
						id: 2,
						details:
							"The first project that Gray TV handed me was indeed a large one, and it was a lot of fun too. This would be my first time getting to use Electron.js to build a desktop application that could be auto-updated and deployed in an instant, while using the tools I was already very familiar with: HTML, CSS, and Vue.js. ",
					},
					{
						id: 3,
						details:
							"These frontend tools that I'd get to use would help me build some pretty awesome apps with surprisingly fun interactivity. Want to show some fun poll results? You got it. Want to show results in a graph instead? I'll give you six different types of graphs to use. How about local sports scores? No problem, you can show as many as you want, any team, any sport. Text Conversations? Yep. School Closings? Of course. Election results? Oh yeah. Local Gas Prices? Yes. A board I can fill with images, pinch-zoom those images, rotate and do whatever I want with them? Sure! Can I use a draw tool to draw all over the apps as well? Done! Okay the list goes on, and I don't want to make the reading here too long, but hopefully you get the point. There's a lot of functionality in this project!",
					},
					{
						id: 4,
						details:
							"I was the sole developer on this project, and it gave me some awesome experience in developing with a touch/interactive focused mindset. Animations, draggability, zooming, swiping, rotating, it's all here in these apps. These apps are also connected to RESTful API endpoints that are fed from another project I developed called the Touch-board Admin Tool (for more info on that see in projects).",
					},
				],
				socialSharingsHeading: 'Share This',
				socialSharings: [
					{
						id: 1,
						name: 'Twitter',
						icon: 'twitter',
						url: 'https://twitter.com/',
					},
					{
						id: 2,
						name: 'Instagram',
						icon: 'instagram',
						url: 'https://instagram.com/',
					},
					{
						id: 3,
						name: 'Facebook',
						icon: 'facebook',
						url: 'https://facebook.com/',
					},
					{
						id: 4,
						name: 'LinkedIn',
						icon: 'linkedin',
						url: 'https://linkedin.com/',
					},
					{
						id: 5,
						name: 'Youtube',
						icon: 'youtube',
						url: 'https://www.youtube.com/',
					},
				],
			},
			relatedProject: {
				relatedProjectsHeading: 'Related Projects',
				relatedProjects: [
					{
						id: 1,
						title: 'Mobile UI',
						img: '../assets/images/mobile-project-1.jpg',
					},
					{
						id: 2,
						title: 'Web Application',
						img: '../assets/images/web-project-1.jpg',
					},
					{
						id: 3,
						title: 'UI Design',
						img: '../assets/images/ui-project-2.jpg',
					},
					{
						id: 4,
						title: 'Kabul Mobile App UI',
						img: '../assets/images/mobile-project-2.jpg',
					},
				],
			},
		};
	},
	mounted() {
		feather.replace();
	},
	updated() {
		feather.replace();
	},
	methods: {},
};
</script>

<template>
	<div class="container mx-auto mt-10 sm:mt-20">
		<!-- Project header -->
		<ProjectHeader :singleProjectHeader="singleProjectHeader" />

		<!-- Project gallery -->
		<ProjectGallery :projectImages="projectImages" />

		<!-- Project information -->
		<ProjectInfo :projectInfo="projectInfo" />

		<!-- Project related projects -->
		<!-- <ProjectRelatedProjects :relatedProject="relatedProject" /> -->
	</div>
</template>

<style scoped></style>
