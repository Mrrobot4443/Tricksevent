@extends('admin.layouts.app')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row page-titles mx-0">
                <div class="col-sm-6 p-md-0">
                    <div class="breadcrumb-range-picker">
                        <span><i class="icon-calender"></i></span>
                        <span class="ml-1">Welcome</span>
                    </div>
                </div>
                <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Components</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-intro-title">Calendar</h4>

                            <div class="">
                                <div id="external-events" class="my-3">
                                    <p>Drag and drop your event or click in the calendar</p>
                                    <div class="external-event" data-class="bg-primary"><i class="fa fa-move"></i>New Theme
                                        Release</div>
                                    <div class="external-event" data-class="bg-success"><i class="fa fa-move"></i>My Event
                                    </div>
                                    <div class="external-event" data-class="bg-warning"><i class="fa fa-move"></i>Meet
                                        manager</div>
                                    <div class="external-event" data-class="bg-dark"><i class="fa fa-move"></i>Create New
                                        theme</div>
                                </div>
                                <!-- checkbox -->
                                <div class="checkbox checkbox-event pt-3 pb-5">
                                    <input id="drop-remove" class="styled-checkbox" type="checkbox">
                                    <label class="ml-2 mb-0" for="drop-remove">Remove After Drop</label>
                                </div>
                                <a href="javascript:void()" data-toggle="modal" data-target="#add-category"
                                    class="btn btn-primary btn-event w-100">
                                    <span class="align-middle"><i class="ti-plus"></i></span>
                                    Create New
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="card">
                        <div class="card-body">
                            <div id="calendar" class="app-fullcalendar"></div>
                        </div>
                    </div>
                </div>
                <!-- BEGIN MODAL -->
                <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add New Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create
                                    event</button>

                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light"
                                    data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Add Category -->
                <div class="modal fade none-border" id="add-category">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title"><strong>Add a category</strong></h4>
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Category Name</label>
                                            <input class="form-control form-white" placeholder="Enter name" type="text"
                                                name="category-name">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Choose Category Color</label>
                                            <select class="form-control form-white" data-placeholder="Choose a color..."
                                                name="category-color">
                                                <option value="success">Success</option>
                                                <option value="danger">Danger</option>
                                                <option value="info">Info</option>
                                                <option value="pink">Pink</option>
                                                <option value="primary">Primary</option>
                                                <option value="warning">Warning</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect"
                                    data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-danger waves-effect waves-light save-category"
                                    data-dismiss="modal">Save</button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <script>
        ! function(e) {
            "use strict";
            var t = function() {
                this.$body = e("body"), this.$modal = e("#event-modal"), this.$event =
                    "#external-events div.external-event", this.$calendar = e("#calendar"), this.$saveCategoryBtn = e(
                        ".save-category"), this.$categoryForm = e("#add-category form"), this.$extEvents = e(
                        "#external-events"), this.$calendarObj = null
            };
            t.prototype.onDrop = function(t, n) {
                var a = t.data("eventObject"),
                    o = t.attr("data-class"),
                    i = e.extend({}, a);
                i.start = n, o && (i.className = [o]), this.$calendar.fullCalendar("renderEvent", i, !0), e(
                    "#drop-remove").is(":checked") && t.remove()
            }, t.prototype.onEventClick = function(t, n, a) {
                var o = this,
                    i = e("<form></form>");
                i.append("<label>Change event name</label>"), i.append(
                        "<div class='input-group'><input class='form-control' type=text value='" + t.title +
                        "' /><span class='input-group-btn'><button type='submit' class='btn btn-success waves-effect waves-light'><i class='fa fa-check'></i> Save</button></span></div>"
                        ), o.$modal.modal({
                        backdrop: "static"
                    }), o.$modal.find(".delete-event").show().end().find(".save-event").hide().end().find(".modal-body")
                    .empty().prepend(i).end().find(".delete-event").unbind("click").on("click", function() {
                        o.$calendarObj.fullCalendar("removeEvents", function(e) {
                            return e._id == t._id
                        }), o.$modal.modal("hide")
                    }), o.$modal.find("form").on("submit", function() {
                        return t.title = i.find("input[type=text]").val(), o.$calendarObj.fullCalendar(
                            "updateEvent", t), o.$modal.modal("hide"), !1
                    })
            }, t.prototype.onSelect = function(t, n, a) {
                var o = this;
                o.$modal.modal({
                    backdrop: "static"
                });
                var i = e("<form></form>");
                i.append("<div class='row'></div>"), i.find(".row").append(
                        "<div class='col-md-6'><div class='form-group'><label class='control-label'>Event Name</label><input class='form-control' placeholder='Insert Event Name' type='text' name='title'/></div></div>"
                        ).append(
                        "<div class='col-md-6'><div class='form-group'><label class='control-label'>Category</label><select class='form-control' name='category'></select></div></div>"
                        ).find("select[name='category']").append("<option value='bg-danger'>Danger</option>").append(
                        "<option value='bg-success'>Success</option>").append("<option value='bg-dark'>Dark</option>")
                    .append("<option value='bg-primary'>Primary</option>").append(
                        "<option value='bg-pink'>Pink</option>").append("<option value='bg-info'>Info</option>").append(
                        "<option value='bg-warning'>Warning</option></div></div>"), o.$modal.find(".delete-event")
                    .hide().end().find(".save-event").show().end().find(".modal-body").empty().prepend(i).end().find(
                        ".save-event").unbind("click").on("click", function() {
                        i.submit()
                    }), o.$modal.find("form").on("submit", function() {
                        var e = i.find("input[name='title']").val(),
                            a = (i.find("input[name='beginning']").val(), i.find("input[name='ending']").val(), i
                                .find("select[name='category'] option:checked").val());
                        return null !== e && 0 != e.length ? (o.$calendarObj.fullCalendar("renderEvent", {
                            title: e,
                            start: t,
                            end: n,
                            allDay: !1,
                            className: a
                        }, !0), o.$modal.modal("hide")) : alert("You have to give a title to your event"), !1
                    }), o.$calendarObj.fullCalendar("unselect")
            }, t.prototype.enableDrag = function() {
                e(this.$event).each(function() {
                    var t = {
                        title: e.trim(e(this).text())
                    };
                    e(this).data("eventObject", t), e(this).draggable({
                        zIndex: 999,
                        revert: !0,
                        revertDuration: 0
                    })
                })
            }, t.prototype.init = function() {
                this.enableDrag();
                var t = new Date,
                    n = (t.getDate(), t.getMonth(), t.getFullYear(), new Date(e.now())),
                    a = [{
                        title: "Chicken Burger",
                        start: new Date(e.now() + 158e6),
                        className: "bg-dark"
                    }, {
                        title: "Soft drinks",
                        start: n,
                        end: n,
                        className: "bg-danger"
                    }, {
                        title: "Hot dog",
                        start: new Date(e.now() + 338e6),
                        className: "bg-primary"
                    }],
                    o = this;
                o.$calendarObj = o.$calendar.fullCalendar({
                    slotDuration: "00:15:00",
                    minTime: "08:00:00",
                    maxTime: "19:00:00",
                    defaultView: "month",
                    handleWindowResize: !0,
                    height: e(window).height() - 200,
                    header: {
                        left: "prev,next today",
                        center: "title",
                        right: "month,agendaWeek,agendaDay"
                    },
                    events: a,
                    editable: !0,
                    droppable: !0,
                    eventLimit: !0,
                    selectable: !0,
                    drop: function(t) {
                        o.onDrop(e(this), t)
                    },
                    select: function(e, t, n) {
                        o.onSelect(e, t, n)
                    },
                    eventClick: function(e, t, n) {
                        o.onEventClick(e, t, n)
                    }
                }), this.$saveCategoryBtn.on("click", function() {
                    var e = o.$categoryForm.find("input[name='category-name']").val(),
                        t = o.$categoryForm.find("select[name='category-color']").val();
                    null !== e && 0 != e.length && (o.$extEvents.append('<div class="external-event bg-' + t +
                            '" data-class="bg-' + t +
                            '" style="position: relative;"><i class="fa fa-move"></i>' + e + "</div>"), o
                        .enableDrag())
                })
            }, e.CalendarApp = new t, e.CalendarApp.Constructor = t
        }(window.jQuery),
        function(e) {
            "use strict";
            e.CalendarApp.init()
        }(window.jQuery);
    </script>
@endsection
