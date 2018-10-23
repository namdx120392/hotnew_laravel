
if ($("#calendar").length) {
	var date = new Date();
	var d = date.getDate();
	var m = date.getMonth();
	var y = date.getFullYear();

	var calendar = $('#calendar').fullCalendar({

		editable : true,
		draggable : true,
		selectable : false,
		selectHelper : true,
		unselectAuto : false,
		disableResizing : false,

		header : {
			left : 'title', //,today
			center : 'prev, next, today',
			right : 'month, agendaWeek, agenDay' //month, agendaDay,
		},

		select : function(start, end, allDay) {
			var title = prompt('Event Title:');
			if (title) {
				calendar.fullCalendar('renderEvent', {
					title : title,
					start : start,
					end : end,
					allDay : allDay
				}, true // make the event "stick"
				);
			}
			calendar.fullCalendar('unselect');
		},

		events : [{
			title : 'All Day Event',
			start : new Date(y, m, 1),
			description : 'long description',
			className : ["event", "bg-color-greenLight"],
			icon : 'fa-check'
		},
		 {
			title : 'Long Event',
			start : new Date(y, m, d - 5),
			end : new Date(y, m, d - 2),
			className : ["event", "bg-color-red"],
			icon : 'fa-lock'
		},
		 {
			id : 999,
			title : 'Repeating Event',
			start : new Date(y, m, d - 3, 16, 0),
			allDay : false,
			className : ["event", "bg-color-blue"],
			icon : 'fa-clock-o'
		}, {
			id : 999,
			title : 'Repeating Event',
			start : new Date(y, m, d + 4, 16, 0),
			allDay : false,
			className : ["event", "bg-color-blue"],
			icon : 'fa-clock-o'
		}, {
			title : 'Meeting',
			start : new Date(y, m, d, 10, 30),
			allDay : false,
			className : ["event", "bg-color-darken"]
		}, {
			title : 'Lunch',
			start : new Date(y, m, d, 12, 0),
			end : new Date(y, m, d, 14, 0),
			allDay : false,
			className : ["event", "bg-color-darken"]
		}, {
			title : 'Birthday Party',
			start : new Date(y, m, d + 1, 19, 0),
			end : new Date(y, m, d + 1, 22, 30),
			allDay : false,
			className : ["event", "bg-color-darken"]
		}, {
			title : 'Smartadmin Open Day',
			start : new Date(y, m, 28),
			end : new Date(y, m, 29),
			className : ["event", "bg-color-darken"]
		}],

		eventRender : function(event, element, icon) {
			if (!event.description == "") {
				element.find('.fc-event-title').append("<br/><span class='ultra-light'>" + event.description + "</span>");
			}
			if (!event.icon == "") {
				element.find('.fc-event-title').append("<i class='air air-top-right fa " + event.icon + " '></i>");
			}
		}
	});

};


$(function() {
	// jQuery Flot Chart
	var count_view = [[1, 27], [2, 34], [3, 51], [4, 48], [5, 55], [6, 65], [7, 61], [8, 70], [9, 65], [10, 75], [11, 57], [12, 59], [13, 62]], facebook = [[1, 25], [2, 31], [3, 45], [4, 37], [5, 38], [6, 40], [7, 47], [8, 55], [9, 43], [10, 50], [11, 47], [12, 39], [13, 47]], 
	data = [
	{
		label : "Lượt Truy cập",
		data : count_view,
		lines : {
			show : true,
			lineWidth : 1,
			fill : true,
			fillColor : {
				colors : [{
					opacity : 0.1
				}, {
					opacity : 0.13
				}]
			}
		},
		points : {
			show : true
		}
	}];

	var options = {
		grid : {
			hoverable : true
		},
		colors : ["#568A89", "#3276B1"],
		tooltip : true,
		tooltipOpts : {
			//content : "Value <b>$x</b> Value <span>$y</span>",
			defaultTheme : false
		},
		xaxis : {
			ticks : [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"], [13, "JAN+1"]]
		},
		yaxes : {

		}
	};

	var plot3 = $.plot($("#statsChart"), data, options);
});