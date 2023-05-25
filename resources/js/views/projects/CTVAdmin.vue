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
				singleProjectTitle: 'CTV Admin Tool',
				singleProjectDate: 'April 3, 2023',
				singleProjectTag: 'Web Application',
			},
			projectImages: [
				{
					id: 1,
					title: 'CTV Admin Tool',
					img: '../assets/images/private.jpg',
				},
				{
					id: 2,
					title: 'CTV Admin Tool',
					img: '../assets/images/private.jpg',
				},
				{
					id: 3,
					title: 'CTV Admin Tool',
					img: '../assets/images/private.jpg',
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
					'Create an administration tool that will build a feed and will allow news stations to configure their content to be shown in a Connected TV (CTV) application.',
				technologies: [
					{
						title: 'Tools & Technologies',
						techs: [
							'HTML',
							'CSS',
                            'TailwindCSS',
							'JavaScript',
							'Alpine.js',
                            'PHP',
							'Laravel',
                            'Livewire',
                            'MySQL'
						],
					},
				],
				projectDetailsHeading: 'Challenge',
				projectDetails: [
					{
						id: 1,
						details:
							"It was asked that this CTV administration tool be built in a way that would be more friendly to PHP developers. I was the only developer on the team that had experience with both PHP and Vue.js, and so the project managers thought it would be good to migrate toward a tech stack that accomodated everyone on the digital development team, and most everyone had at least some experience with PHP. Anyway, that is how the TALL stack (TailwindCSS, Alpine.js, Laravel, Livewire) structure for this project originated, and I was happy to be one of the co-developers on this project. It was a great way to get more familiar with a new tech stack.",
					},
					{
						id: 2,
						details:
							"This administration tool had to have many different dynamic forms for the user to fill out. Certain inputs would trigger different types of fields to appear and others to disappear. Some form settings were specific to a news station, and others were more global and applied to all stations. Forms included livestream content, feature sections, pages, page layout, and all sorts of different page content. The ultimate goal was to allow the user to construct a JSON feed for their news station, and then this feed would be pulled in from a different app which would build out the CTV app that could go into devices (like TVs from Roku, Apple, Amazon, Android, etc.).",
					},
					{
						id: 3,
						details:
							"My role in this project would involve full-stack development. I was in charge of building all of the frontend, including complex validation methods for certain form processes, setting up the database migrations, and making sure communications to the database from the frontend were working as expected. The other developer that helped in this project was focused on retrieving data stored in the database when a publish button was clicked, and they would use this data to construct a JSON feed that could be hosted at a site. I also helped with a little bit of this feed construction as well.",
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
