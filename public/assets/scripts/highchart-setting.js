Highcharts.chart('compare-chart', {
	chart: {
		type: 'column'
	},
	title: {
		text: 'Comparative Report of Diseases'
	},
	subtitle: {
		text: 'Pet Solution'
	},
	xAxis: {
		categories: [
		'Jan',
		'Feb',
		'Mar',
		'Apr',
		'May',
		'Jun',
		'Jul',
		'Aug',
		'Sep',
		'Oct',
		'Nov',
		'Dec'
		],
		crosshair: true
	},
	yAxis: {
		min: 0,
		title: {
			text: 'Patients'
		}
	},
	tooltip: {
		headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
		pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
		'<td style="padding:0"><b>{point.y} patient(s)</b></td></tr>',
		footerFormat: '</table>',
		shared: true,
		useHTML: true
	},
	plotOptions: {
		column: {
			pointPadding: 0.2,
			borderWidth: 0
		}
	},
	series: [{
		name: 'Disease 1',
		data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]

	}, {
		name: 'Disease 2',
		data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]

	}, {
		name: 'Disease 3',
		data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]

	}, {
		name: 'Disease 4',
		data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]

	},{
		name: 'Disease 5',
		data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]

	},{
		name: 'Disease 6',
		data: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]

	}]
});