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
				singleProjectTitle: 'Scholarships API',
				singleProjectDate: 'September 16, 2019',
				singleProjectTag: 'APIs',
			},
			projectImages: [
				{
					id: 1,
					title: 'Touchboard Admin Tool',
					img: '../assets/images/private.jpg',
				},
				{
					id: 2,
					title: 'Touchboard Admin Tool',
					img: '../assets/images/private.jpg',
				},
				{
					id: 3,
					title: 'Touchboard Admin Tool',
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
					'Setup restful API endpoints that can have total control over scholarship application data, and allow these endpoints to be easily accessed in a pre-existing application structure - through AJAX calls from a Vue.js frontend.',
				technologies: [
					{
						title: 'Tools & Technologies',
						techs: [
                            'PHP',
							'Laravel',
                            'MySQL',
						],
					},
				],
				projectDetailsHeading: 'Challenge',
				projectDetails: [
					{
						id: 1,
						details:
							"This would be one of the many APIs that I built for First Community Credit Union, and one that I like to feature prominently since it felt very rewarding to build something that would allow students to receive well deserved aid to their collegiate studies.",
					},
					{
						id: 2,
						details:
							"With this project, I was designated as the sole backend developer that would build endpoints in the Laravel/Lumen framework for the frontend team to call upon for getting and manipulating scholarship data. A frontend was already in place, and an old database structure with old php code querying it was also in place. So the challenge really consisted of taking a pre-existing backend structure, extracting the most necessary parts, adding any new features requested of the new application, and optimizing it with a more modern framework like Laravel.",
					},
					{
						id: 3,
						details:
							"Identifying the needed database fields was simple enough since I was in good communication with the credit union's scholarship committee and their desires for what they needed from a scholarship applicant. Laying out the database table relations was a little more complex since there was a need to incorporate an ability to run jobs that would check for secure file uploads from applicants and change applicant statuses depending on the result of the security check. Relations between student info and scholarship application status needed to be easily understandable and adjustable.",
					},
					{
						id: 4,
						details:
							"This project gave me a great understanding of how to communicate with another team of developers and document how to use what I was building. It was important that the frontend team knew how to access my api endpoints so that they could easily understand how to develop the new and improved version of the scholarship application process, and this understanding led to a great app that was able to help many students.",
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
