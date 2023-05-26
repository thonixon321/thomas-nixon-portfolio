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
				singleProjectTitle: 'Payroll',
				singleProjectDate: 'September 16, 2019',
				singleProjectTag: 'Web Application',
			},
			projectImages: [
				{
					id: 1,
					title: 'Payroll',
					img: '../assets/images/private.jpg',
				},
				{
					id: 2,
					title: 'Payroll',
					img: '../assets/images/private.jpg',
				},
				{
					id: 3,
					title: 'Payroll',
					img: '../assets/images/private.jpg',
				},
			],
			projectInfo: {
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
					'Create an app that will allow customers who own businesses to manange the payroll for their employees through their banking account.',
				technologies: [
					{
						title: 'Tools & Technologies',
						techs: [
							'HTML',
							'CSS',
							'JavaScript',
							'jQuery'
						],
					},
				],
				projectDetailsHeading: 'Challenge',
				projectDetails: [
					{
						id: 1,
						details:
							"Not long after I had wrapped up my development on the financial calculators for First Community Credit Union, they gave me this project that would impact the way their business members would pay their employees, and I felt like my responsibility as a developer was getting greater and greater.",
					},
					{
						id: 2,
						details:
							"Here I was, in charge of the frontend structure of how bank accounts would be accessed and distributed payments, setting up highly secure input validation in JavaScript, making sure members were notified when there were payment updates, account discrepancies, scheduling concerns, etc., and I was building it all in a jQuery single-page-application with an easy to follow step by step process which clearly showed how each employee would be paid through the business they worked for.",
					},
					{
						id: 3,
						details:
							"This was a huge product for the credit union and it would draw in many businesses and give them confidence that they could set up accounts and use this tool instead of their pre-existing ones. It was one of the first projects I felt had a big and positive impact on a large number of people. This product also came with an administration side that I built to help the credit union employees manage the transactions that businesses needed to make for their employees.",
					},
					{
						id: 4,
						details:
							"Getting to make a payroll system easy and intuitive to use gave me a great confidence in my coding abilities, and it assured me that I was capable of taking on projects that many people relied on in important ways.",
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
