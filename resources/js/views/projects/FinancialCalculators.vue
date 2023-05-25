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
				singleProjectTitle: 'Financial Calculators',
				singleProjectDate: 'October 10, 2018',
				singleProjectTag: 'Web Application',
			},
			projectImages: [
				{
					id: 1,
					title: 'Financial Calculators',
					img: '../assets/images/credit-card-calculator.png',
				},
				{
					id: 2,
					title: 'Financial Calculators',
					img: '../assets/images/finCalc-budget.png',
				},
				{
					id: 3,
					title: 'Financial Calculators',
					img: '../assets/images/finCalc-loan.png',
				},
			],
			projectInfo: {
                siteLocation: 'https://www.myfirstccu.org/page/calculators',
				clientHeading: 'About Client',
				companyInfos: [
					{
						id: 1,
						title: 'Name',
						details: 'First Community Credit Union',
					},
					{
						id: 2,
						title: 'Services',
						details: 'Banking and Loans',
					},
					{
						id: 3,
						title: 'Website',
						details: 'https://www.myfirstccu.org',
					},
					{
						id: 4,
						title: 'Phone',
						details: '855-328-2441',
					},
				],
				objectivesHeading: 'Objective',
				objectivesDetails:
					'Build twelve different financial apps that can be used to help customers pay off debts, plan for retirement, calculate all sorts of loans, plan a budget, etc.',
				technologies: [
					{
						title: 'Tools & Technologies',
						techs: [
							'HTML',
							'CSS',
							'JavaScript',
							'jQuery',
                            'D3.js'
						],
					},
				],
				projectDetailsHeading: 'Challenge',
				projectDetails: [
					{
						id: 1,
						details:
							"One of my very first projects at the first company I began software development for would end up being one of the biggest projects I have worked on to date, and one of the best learning experiences to date as well. Being tasked with the development of twelve different financial calculators, most of which were highly complex in nature, was a daunting yet exciting task. Ultimately it really put my problem solving skills to the test and cemented my passion for building apps. Honestly each calculator that I was able to make functional gave me a great feeling of pride and confidence in my coding abilities. I've carried that feeling with me to many projects since.",
					},
					{
						id: 2,
						details:
							"This administration tool had to have many different dynamic forms for the user to fill out. Certain inputs would trigger different types of fields to appear and others to disappear. Some form settings were specific to a news station, and others were more global and applied to all stations. Forms included livestream content, feature sections, pages, page layout, and all sorts of different page content. The ultimate goal was to allow the user to construct a JSON feed for their news station, and then this feed would be pulled in from a different app which would build out the CTV app that could go into devices (like TVs from Roku, Apple, Amazon, Android, etc.).",
					},
					{
						id: 3,
						details:
							"My role in this project would end up being full-stack in nature. I was in charge of building all of the frontend, including complex validation methods for certain form processes, setting up the database migrations, and making sure communications to the database from the frontend were working as expected. The other developer that helped in this project was focused on retrieving data stored in the database when a publish button was clicked, and they would use this data to construct a JSON feed that could be hosted at a site. I also helped with a little bit of this feed construction as well.",
					},
					{
						id: 4,
						details:
							"This project's challenge gave me more great experience with form building, form validation, the Laravel TALL stack, and building config feeds.",
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
