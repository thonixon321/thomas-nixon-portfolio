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
							"One of my very first projects in my software development career would end up being one of the biggest projects I have worked on to date, and one of the best learning experiences to date as well. Being tasked with the development of twelve different financial calculators, most of which were highly complex in nature, was no doubt a daunting task, but it was also an exciting opportunity. Ultimately it really put my problem solving skills to the test and helped cement my passion for building apps. Honestly each calculator that I was able to make functional gave me a great feeling of pride and confidence in my coding abilities. I've carried that feeling with me to many projects since.",
					},
					{
						id: 2,
						details:
							"To those who may not know what a financial calculator is, let me try to explain. These are not your average calculators. These are aimed at a specific goals, for instance the auto loan calculator can be used to find out a monthly payment given a price, term-length, interest rate and any other potential factors such as rebates, additional payments, trade allowances, etc. The goal of a financial calculator is usually aimed at helping a customer plan their money in a smart way, and there are so many things to consider when making these plans. Hence, so many types of calculators with so many different formulas used to calculate dozens of potential inputs.",
					},
					{
						id: 3,
						details:
							"So much went into making these calculators not only functional, but also intuitive and informative to a user. Not only can the user clearly see how their inputs affect the graph of a payment schedule, they can also go into a whole different information page which will give them a printable version of the graphs along with payment details and tables to further clarify each part of a schedule.",
					},
					{
						id: 4,
						details:
							"Each calculator is unique as it uses different formulas to calculate different things, and many different types of graphs and data visualizations are used throughout these calculators. This project is live and available for anyone to use, and I encourage you to check it out!",
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
