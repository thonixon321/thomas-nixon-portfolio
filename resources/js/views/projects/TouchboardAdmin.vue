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
				singleProjectTitle: 'Touch-board Admin Tool',
				singleProjectDate: 'October 26, 2022',
				singleProjectTag: 'Web Application',
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
					'Build a tool that administration personnel can use to configure Touch-board applications such as Elections, School Closings, Local Gas Prices, Sports Scores, etc. Also allow this tool to feed the Touch-board desktop app with data through an API.',
				technologies: [
					{
						title: 'Tools & Technologies',
						techs: [
							'HTML',
							'CSS',
							'JavaScript',
							'Vue.js',
							'TailwindCSS',
                            'PHP',
							'Laravel',
                            'MySQL',
                            'AWS Services'
						],
					},
				],
				projectDetailsHeading: 'Challenge',
				projectDetails: [
					{
						id: 1,
						details:
							"This project would require many complex features, so an experienced full stack developer would be paramount to the accomplishing of this large task. This is where I would be called upon, and due to the size of the project, I was allowed to work with a couple other developers - who I would lead and train in the development process. Overall, this project not only showcases my ability as a full-stack developer, it also showcases my ability to lead a team of developers to success.",
					},
					{
						id: 2,
						details:
							"The frontend of this tool needed to fit into a brand new look for the company's administration control panel. This would be the first of many new apps to fit into this new control panel and so I felt a big responsibility to make this look good.",
					},
					{
						id: 3,
						details:
							'To kickstart the frontend, I decided to go with a great looking dashboard template I found online that used TailwindCSS and Vue.js. This template had all the components that would facilitate development of a beautiful looking admin tool, and I knew it would be easy to use since I was already very familiar with using TailwindCSS and Vue. After an enthusiastic approval from project managers (approved for all other new and upcoming admin projects as well), I was underway with developing the frontend of the project, which would include several pages for step by step app configuration forms, app themes, touch-board device registration, installation instructions, a changelog to record updates/bug fixes, and many more features.',
					},
					{
						id: 4,
						details:
							"As the project lead, I developed the framework of the code so that it would be easy for the assisting developers to help develop the various configuration processes needed. Overall there were twelve different touch-board apps we needed to allow admins to configure. So I made sure the other developers knew my process for developing the Vue.js frontend for a particular configuration. So once that was understood, I was able to shift focus to developing the database migrations and API endpoints that would allow the admin tool to configure and store data for each News station's unique app configuration - whether it was a slide to show some local sports scores, a graph to display popular summer events, a countdown to a highly anticipated event, etc. On top of that, I would also build all of the API endpoints to be able to feed another project, the Touch-board desktop app (see in my projects).",
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
