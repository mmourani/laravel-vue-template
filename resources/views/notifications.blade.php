@extends('layouts.default')
@section('title')
    Notifications | Clear Admin Template
@stop
@section('styles')
    <!--page level css -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" href="vendors/animate/animate.min.css"/>
    <link rel="stylesheet" href="vendors/pnotify/css/pnotify.css">
    <link rel="stylesheet" type="text/css" href="vendors/select2/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/select2/css/select2-bootstrap.css">
    <link href="vendors/pnotify/css/pnotify.brighttheme.css" rel="stylesheet" type="text/css"/>
    <link href="vendors/pnotify/css/pnotify.buttons.css" rel="stylesheet" type="text/css"/>
    <link href="vendors/pnotify/css/pnotify.mobile.css" rel="stylesheet" type="text/css"/>
    <link href="vendors/pnotify/css/pnotify.history.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" type="text/css" href="css/custom_css/toastr_notificatons.css">
    <!--end of page level css-->
@stop
@section('content')
    <!-- /.right-side -->
    <aside class="right-side">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>Notifications</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="index">
                        <i class="fa fa-fw ti-home"></i> Dashboard
                    </a>
                </li>
                <li> UI Features</li>
                <li class="active">
                    <a href="javascript:void(0)"> Notifications</a>
                </li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="notify_page">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ti-bell"></i> Notifications
                        </h3>
                        <span class="float-right hidden-xs">
                            <i class="fa fa-fw ti-angle-up clickable"></i>
                            <i class="fa fa-fw ti-close removecard"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Basic Notifications</label>
                            </div>
                        </div>
                        <div class="row notif-types text-center">
                            <div class="col-sm-3">
                                <button class="btn btn-outline-warning source" onclick="new PNotify({
                                title: 'See Through Notice',
                                type: 'primary',
                                text: 'No one ever pays attention to me. Why should they? I\'m practically invisible.',
                                addclass: 'translucent'

                            });
                var source_note = 'translucent is a custom class defined (using ui-pnotify-fade-in) with opacity: .8.';">
                                    Translucent <span class="hidden-sm hidden-md">Notice</span>
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-danger source" onclick="new PNotify({
                                title: 'Oh No!',
                                text: 'Something terrible happened.',
                                type: 'error'
                            });">Regular Error
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-warning source" onclick="var notice = new PNotify({
                                text: $('#form_notice').html(),
                                icon: false,
                                width: 'auto',
                                hide: false,
                                buttons: {
                                    closer: false,
                                    sticker: false
                                },
                                insert_brs: false
                            });
                            notice.get().find('form.pf-form').on('click', '[name=cancel]', function(){
                                notice.remove();
                            }).submit(function(){
                                var username = $(this).find('input[name=username]').val();
                                if (!username) {
                                    alert('Please provide a username.');
                                    return false;
                                }
                                notice.update({
                                    title: 'Welcome',
                                    text: 'Successfully logged in as '+username,
                                    icon: true,
                                    width: PNotify.prototype.options.width,
                                    hide: true,
                                    buttons: {
                                        closer: true,
                                        sticker: true
                                    },
                                    type: 'success'
                                });
                                return false;
                            });">Form Notice
                                </button>
                                <div id="form_notice" style="display: none;">
                                    <form class="pf-form pform_custom" method="get">
                                        <div class="pf-element pf-heading">
                                            <h3 style="margin-top: 0;">Login to Continue</h3>
                                        </div>
                                        <div class="pf-element">
                                            <label>
                                                <span class="pf-label">Username</span>
                                                <input class="pf-field form-control" type="text" name="username"/>
                                            </label>
                                        </div>
                                        <div class="pf-element">
                                            <label>
                                                <span class="pf-label">Password</span>
                                                <input class="pf-field form-control" type="password" name="password"/>
                                            </label>
                                        </div>
                                        <div class="pf-element">
                                            <label>
                                                <input class="pf-field" type="checkbox" name="remember"/>
                                                <span class="pf-label">Remember Me</span>
                                            </label>
                                        </div>
                                        <div class="pf-element pf-buttons pf-centered">
                                            <input class="pf-button btn btn-default" type="submit" name="submit"
                                                   value="Submit"/>
                                            <input class="pf-button btn btn-default" type="button" name="cancel"
                                                   value="Cancel"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-success source" onclick="new PNotify({
                                title: 'Big Notice',
                                type: 'success',
                                text: 'Check me out! I\'m tall and wide, even though my text isn\'t.',
                                width: '500px',
                                min_height: '400px'
                            });">Big Notice
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-info source" onclick="var notice = new PNotify({
                                title: 'Click Notice',
                                type: 'info',
                                text: 'I wish someone would click me.'
                            });
                            notice.get().css('cursor', 'pointer').click(function(e){
                                if ($(e.target).is('.ui-pnotify-closer *, .ui-pnotify-sticker *'))
                                    return;
                                notice.update({type: 'success', text: 'Yay, you clicked me!&lt;div style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;https://upload.wikimedia.org/wikipedia/commons/thumb/e/ec/Happy_smiley_face.png/240px-Happy_smiley_face.png&quot; /&gt;&lt;/div&gt;'});
                            });">Click Notice
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-success source" onclick="new PNotify({
                                title: '&lt;em&gt;Escaped Notice&lt;/em&gt;',
                                title_escape: true,
                                type: 'success',
                                text: $('#evil_html').html(),
                                text_escape: true
                            });">Escaped Notice
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-info source dynamic_notice">Dynamic Notice
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Animated Notifications</label>
                            </div>
                        </div>
                        <div class="row notif-types text-center">
                            <div class="col-sm-3">
                                <button class="btn btn-outline-warning source" onclick="new PNotify({
                                    title: 'From the top Effect',
                                    text: 'I use effects from Animate.css. Such smooth CSS3 transitions make me feel like butter.',
                                    animate: {
                                        animate: true,
                                        in_class: 'slideInDown',
                                        out_class: 'slideOutUp'
                                    }
                                });">From the top!
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-info source" onclick="new PNotify({
                                    title: 'Zoom Effect',
                                    text: 'I use effects from Animate.css. Such smooth CSS3 transitions make me feel like butter.',
                                    type:'info',
                                    animate: {
                                        animate: true,
                                        in_class: 'zoomInLeft',
                                        out_class: 'zoomOutRight'
                                    }
                                });">Zoom
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-danger source" onclick="new PNotify({
                                    title: 'Zippy Effect',
                                    text: 'I use effects from Animate.css. Such smooth CSS3 transitions make me feel like butter.',
                                    type:'error',
                                    animate: {
                                        animate: true,
                                        in_class: 'bounceInLeft',
                                        out_class: 'bounceOutRight'
                                    }
                                });">Zippy
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-info source" onclick="new PNotify({
                                    title: 'Off the Handle Effect',
                                    type: 'info',
                                    text: 'I use effects from Animate.css. Such smooth CSS3 transitions make me feel like butter.',
                                    animate: {
                                        animate: true,
                                        in_class: 'bounceInDown',
                                        out_class: 'hinge'
                                    }
                                });">Off the Handle
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Attention Seekers Notifications</label>
                            </div>
                        </div>
                        <div class="row notif-types text-center">
                            <div class="col-sm-3">
                                <button class="btn btn-outline-info source" onclick="new PNotify({
                                        title: 'Bounce Seeker',
                                        type: 'info',
                                        text: 'Click the button to see how you can highlight the notice with the Animate module',
                                        after_init: function(notice){

                                                notice.attention('bounce');
                                        }
                                    });">Bounce
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-success source" onclick="new PNotify({
                                        title: 'Flash Seeker',
                                        type:'success',
                                        text: 'Click the button to see how you can highlight the notice with the Animate module',
                                        after_init: function(notice){

                                                notice.attention('flash');
                                        }
                                    });">Flash
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-warning source" onclick="new PNotify({
                                        title: 'Pulse Seeker',
                                        text: 'Click the button to see how you can highlight the notice with the Animate module',
                                        after_init: function(notice){
                                                notice.attention('pulse');
                                        }
                                    });">Pulse
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-danger source" onclick="new PNotify({
                                        title: 'Rubber Band Seeker',
                                        type:'error',
                                        text: 'Click the button to see how you can highlight the notice with the Animate module',
                                        after_init: function(notice){

                                                notice.attention('rubberBand');
                                        }
                                    });
                                ">Rubber Band
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-warning source" onclick="new PNotify({
                                        title: 'Shake Seeker',
                                        type: 'warning',
                                        text: 'Click the button to see how you can highlight the notice with the Animate module',
                                        after_init: function(notice){

                                                notice.attention('shake');
                                        }
                                    });">Shake
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-info source" onclick="new PNotify({
                                        title: 'Swing Seeker',
                                        type: 'info',
                                        text: 'Click the button to see how you can highlight the notice with the Animate module',
                                        after_init: function(notice){

                                                notice.attention('swing');
                                        }
                                    });">Swing
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-success source" onclick="new PNotify({
                                        title: 'Tada Seeker',
                                        type: 'success',
                                        text: 'Click the button to see how you can highlight the notice with the Animate module',
                                        after_init: function(notice){

                                                notice.attention('tada');
                                        }
                                    });">Tada
                                </button>
                            </div>
                            <div class="col-sm-3">
                                <button class="btn btn-outline-info source" onclick="new PNotify({
                                        title: 'Jello Seeker',
                                        type:'info',
                                        text: 'Click the button to see how you can highlight the notice with the Animate module',
                                        after_init: function(notice){

                                                notice.attention('jello');
                                        }
                                    });">Jello
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Notifications In and Out Animations</label>
                            </div>
                        </div>
                        <div class="row notif-types text-center">
                            <div class="col-sm-4 m-t-30">
                                <div class="form-group">
                                    <label class="custom-control control-label pull-left">Effect in</label>
                                    <br>
                                    <select id="animate_in" class="select2 form-control"
                                            style="display: inline; width: auto;">
                                        <option value="bounceIn">bounceIn</option>
                                        <option value="bounceInUp">bounceInUp</option>
                                        <option value="fadeIn">fadeIn</option>
                                        <option value="fadeInLeft">fadeInLeft</option>
                                        <option value="fadeInLeftBig">fadeInLeftBig</option>
                                        <option value="flipInX">flipInX</option>
                                        <option value="lightSpeedIn">lightSpeedIn</option>
                                        <option value="rotateIn">rotateIn</option>
                                        <option value="rotateInDownLeft">rotateInDownLeft</option>
                                        <option value="rollIn">rollIn</option>
                                        <option value="zoomIn">zoomIn</option>
                                        <option value="zoomInLeft">zoomInLeft</option>
                                        <option value="slideInRight">slideInRight</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 m-t-30">
                                <div class="form-group">
                                    <label class="custom-control control-label pull-left">Effect out</label>
                                    <br>
                                    <select id="animate_out" class=" select2 form-control"
                                            style="display: inline; width: auto;">
                                        <option value="bounceOut">bounceOut</option>
                                        <option value="bounceOutLeft">bounceOutLeft</option>
                                        <option value="fadeOut">fadeOut</option>
                                        <option value="fadeOutDown">fadeOutDown</option>
                                        <option value="fadeOutDownBig">fadeOutDownBig</option>
                                        <option value="flipOutY">flipOutY</option>
                                        <option value="lightSpeedOut">lightSpeedOut</option>
                                        <option value="rotateOutUpRight">rotateOutUpRight</option>
                                        <option value="hinge">hinge</option>
                                        <option value="rollOut">rollOut</option>
                                        <option value="zoomOut">zoomOut</option>
                                        <option value="zoomOutDown">zoomOutDown</option>
                                        <option value="slideOutUp">slideOutUp</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-4 mrgn_setng">
                                <button class="btn btn-outline-warning source m-t-10" onclick="
                                    var animate_in = $('#animate_in').val(),
                                        animate_out = $('#animate_out').val();
                                    new PNotify({
                                        title: 'Own Animation Style Effect',
                                        text: 'I use effects from Animate.css. Such smooth CSS3 transitions make me feel like butter.',
                                        animate: {
                                            animate: true,
                                            in_class: animate_in,
                                            out_class: animate_out
                                        }
                                    });">Check Animation
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mrgn_top">
                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="ti-bell"></i> Confirm and Callback Module
                        </h3>
                        <span class="float-right hidden-xs">
                            <i class="fa fa-fw ti-angle-up clickable"></i>
                            <i class="fa fa-fw ti-close removecard"></i>
                        </span>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Confirm Module Confirmation dialogs and prompts</label>
                            </div>
                        </div>
                        <div class="row notif-types text-center">
                            <div class="col-sm-4">
                                <button class="btn btn-outline-success source" onclick="(new PNotify({
                                        title: 'Confirmation Needed',
                                        text: 'Are you sure?',
                                        icon: 'fa fa-question-circle',
                                        type:'success',
                                        hide: false,
                                        confirm: {
                                            confirm: true
                                        },
                                        buttons: {
                                            closer: false,
                                            sticker: false
                                        },
                                        history: {
                                            history: false
                                        }
                                    })).get().on('pnotify.confirm', function(){
                                        alert('Ok, cool.');
                                    }).on('pnotify.cancel', function(){
                                        alert('Oh ok. Chicken, I see.');
                                    });">Confirm Dialog
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-outline-warning source" onclick="(new PNotify({
                                        title: 'Confirmation Needed',
                                        text: 'Are you sure?',
                                        icon: 'fa fa-question-circle',
                                        hide: false,
                                        confirm: {
                                            confirm: true
                                        },
                                        buttons: {
                                            closer: false,
                                            sticker: false
                                        },
                                        history: {
                                            history: false
                                        },
                                        addclass: 'stack-modal',
                                        stack: {'dir1': 'down', 'dir2': 'right', 'modal': true}
                                    })).get().on('pnotify.confirm', function(){
                                        alert('Ok, cool.');
                                    }).on('pnotify.cancel', function(){
                                        alert('Oh ok. Chicken, I see.');
                                    });">Modal Confirm Dialog
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-outline-danger source" onclick="new PNotify({
                                          title: 'Choose a Side',
                                          text: 'You have three options to choose from.',
                                          type:'error',
                                          icon: 'fa fa-question-circle',
                                          hide: false,
                                          confirm: {
                                            confirm: true,
                                            buttons: [
                                                {
                                                    text: 'Fries',

                                                    click: function(notice){
                                                        notice.update({
                                                            title: 'You\'ve Chosen a Side', text: 'You want fries.', icon: true, type: 'info', hide: true,
                                                            confirm: {
                                                                confirm: false
                                                            },
                                                            buttons: {
                                                                closer: true,
                                                                sticker: true
                                                            }
                                                        });
                                                    }
                                                },
                                                {
                                                    text: 'Mash',
                                                    click: function(notice){
                                                        notice.update({
                                                            title: 'You\'ve Chosen a Side', text: 'You want mashed potatoes.', icon: true, type: 'info', hide: true,
                                                            confirm: {
                                                                confirm: false
                                                            },
                                                            buttons: {
                                                                closer: true,
                                                                sticker: true
                                                            }
                                                        });
                                                    }
                                                },
                                                {
                                                    text: 'Fruit',
                                                    click: function(notice){
                                                        notice.update({
                                                            title: 'You\'ve Chosen a Side', text: 'You want fruit.', icon: true, type: 'info', hide: true,
                                                            confirm: {
                                                                confirm: false
                                                            },
                                                            buttons: {
                                                                closer: true,
                                                                sticker: true
                                                            }
                                                        });
                                                    }
                                                }
                                            ]
                                        },
                                        buttons: {
                                            closer: false,
                                            sticker: false
                                        },
                                        history: {
                                            history: false
                                        }
                                    });">Custom Buttons
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-outline-info source" onclick="new PNotify({
                                        title: 'You Will Receive a Side',
                                        text: 'You have no choice.',
                                        type:'info',
                                        icon: 'fa fa-info-circle',
                                        hide: false,
                                        confirm: {
                                            confirm: true,
                                            buttons: [
                                                {
                                                    text: 'Ok',

                                                    click: function(notice){
                                                        notice.remove();
                                                    }
                                                },
                                                null
                                            ]
                                        },
                                        buttons: {
                                            closer: false,
                                            sticker: false
                                        },
                                        history: {
                                            history: false
                                        }
                                    });">Alert Style Button
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-outline-success source" onclick="(new PNotify({
                                        title: 'Input Needed',
                                        type: 'success',
                                        text: 'What side would you like?',
                                        icon: 'fa fa-question-circle',
                                        hide: false,
                                        confirm: {
                                            prompt: true
                                        },
                                        buttons: {
                                            closer: false,
                                            sticker: false
                                        },
                                        history: {
                                            history: false
                                        }
                                    })).get().on('pnotify.confirm', function(e, notice, val){
                                        notice.cancelRemove().update({
                                            title: 'You\'ve Chosen a Side', text: 'You want '+$('<div/>').text(val).html()+'.', icon: true, type: 'info', hide: true,
                                            confirm: {
                                                prompt: false
                                            },
                                            buttons: {
                                                closer: true,
                                                sticker: true
                                            }
                                        });
                                    }).on('pnotify.cancel', function(e, notice){
                                        notice.cancelRemove().update({
                                            title: 'You Don\'t Want a Side', text: 'No soup for you!', icon: true, type: 'info', hide: true,
                                            confirm: {
                                                prompt: false
                                            },
                                            buttons: {
                                                closer: true,
                                                sticker: true
                                            }
                                        });
                                    });">Prompt Dialog
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-outline-warning source" onclick="(new PNotify({
                                        title: 'Input Needed',
                                        text: 'Write me a poem, please.',
                                        type:'warning',
                                        icon: 'fa fa-question-circle',
                                        hide: false,
                                        confirm: {
                                            prompt: true,
                                            prompt_multi_line: true,
                                            prompt_default: 'Roses are red,\nViolets are blue,\n'
                                        },
                                        buttons: {
                                            closer: false,
                                            sticker: false
                                        },
                                        history: {
                                            history: false
                                        }
                                    })).get().on('pnotify.confirm', function(e, notice, val){
                                        notice.cancelRemove().update({
                                            title: 'Your Poem', text: $('<div/>').text(val).html(), icon: true, type: 'info', hide: true,
                                            confirm: {
                                                prompt: false
                                            },
                                            buttons: {
                                                closer: true,
                                                sticker: true
                                            }
                                        });
                                    }).on('pnotify.cancel', function(e, notice){
                                        notice.cancelRemove().update({
                                            title: 'You Don\'t Like Poetry', text: 'Roses are dead,\nViolets are dead,\nI suck at gardening.', icon: true, type: 'info', hide: true,
                                            confirm: {
                                                prompt: false
                                            },
                                            buttons: {
                                                closer: true,
                                                sticker: true
                                            }
                                        });
                                    });">Multi Line Prompt <span class="hidden-md hidden-sm hidden-xs">Dialog</span>
                                </button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label>Callbacks Module Manipulate the notice during its lifecycle</label>
                            </div>
                        </div>
                        <div class="row notif-types text-center">
                            <div class="col-sm-4">
                                <button class="btn btn-outline-warning source" onclick="var dont_alert = function(){};
                                    new PNotify({
                                        title: 'I\'m Here',
                                        text: 'I have a callback for each of my events. I\'ll call all my callbacks while I change states.',
                                        before_init: function(opts){
                                            alert('I\'m called before the notice initializes. I\'m passed the options used to make the notice. I can modify them. Watch me replace the word callback with tire iron!');
                                            opts.text = opts.text.replace(/callback/g, 'tire iron');
                                        },
                                        after_init: function(notice){
                                            alert('I\'m called after the notice initializes. I\'m passed the PNotify object for the current notice: '+notice+'\n\nThere are more callbacks you can assign, but this is the last notice you\'ll see. Check the code to see them all.');
                                        },
                                        before_open: function(notice){
                                            var source_note = 'Return false to cancel opening.';
                                            dont_alert('I\'m called before the notice opens. I\'m passed the PNotify object for the current notice: '+notice);
                                        },
                                        after_open: function(notice){
                                            dont_alert('I\'m called after the notice opens. I\'m passed the PNotify object for the current notice: '+notice);
                                        },
                                        before_close: function(notice, timer_hide){
                                            var source_note = 'Return false to cancel close. Use PNotify.queueRemove() to set the removal timer again.';
                                            dont_alert('I\'m called before the notice closes. I\'m passed the PNotify object for the current notice: '+notice);
                                            dont_alert('I also have an argument called timer_hide, which is true if the notice was closed because the timer ran down. Value: '+timer_hide);
                                        },
                                        after_close: function(notice, timer_hide){
                                            dont_alert('I\'m called after the notice closes. I\'m passed the PNotify object for the current notice: '+notice);
                                            dont_alert('I also have an argument called timer_hide, which is true if the notice was closed because the timer ran down. Value: '+timer_hide);
                                        }
                                    });">Notice with Callbacks
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-outline-danger source" onclick="new PNotify({
                                        title: 'Notice',
                                        text: 'Right now I\'m a notice.',
                                        before_close: function(notice){
                                            notice.update({
                                                title: 'Error',
                                                text: 'Uh oh. Now I\'ve become an error.',
                                                type: 'error',
                                                before_close: function(notice){
                                                    notice.update({
                                                        title: 'Success',
                                                        text: 'I fixed the error!',
                                                        type: 'success',
                                                        before_close: function(notice){
                                                            notice.update({
                                                                title: 'Info',
                                                                text: 'Everything\'s cool now.',
                                                                type: 'info',
                                                                before_close: null
                                                            });
                                                            notice.attention('swing');
                                                            notice.queueRemove();
                                                            return false;
                                                        }
                                                    });
                                                    notice.attention('swing');
                                                    notice.queueRemove();
                                                    return false;
                                                }
                                            });
                                            notice.attention('swing');
                                            notice.queueRemove();
                                            return false;
                                        }
                                    });">Transform Notice
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <button class="btn btn-outline-info source" onclick="new PNotify({
                                        title: 'Sticky Info',
                                        text: 'Sticky info, you know, like a newspaper covered in honey.',
                                        type: 'info',
                                        hide: false
                                    });">Sticky Info
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--rightside bar -->
            <div id="right">
                <div id="right-slim">
                    <div class="rightsidebar-right">
                        <div class="rightsidebar-right-content">
                            <div class="panel-tabs">
                                <ul class="nav nav-tabs nav-float" role="tablist">
                                    <li class="nav-item text-center">
                                        <a href="#r_tab1" role="tab" data-toggle="tab" class="nav-link active "><i
                                                    class="fa fa-fw ti-comments"></i></a>
                                    </li>
                                    <li class="text-center nav-item">
                                        <a href="#r_tab2" role="tab" data-toggle="tab" class="nav-link"><i class="fa fa-fw ti-bell"></i></a>
                                    </li>
                                    <li class="text-center nav-item">
                                        <a href="#r_tab3" role="tab" data-toggle="tab" class="nav-link"><i
                                                    class="fa fa-fw ti-settings"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane active" id="r_tab1">
                                    <div id="slim_t1">
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="menu-icon  fa fa-fw ti-user"></i>
                                            Contacts
                                        </h5>
                                        <ul class="list-unstyled margin-none">
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar6.jpg"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-primary"></i>
                                                    Annette
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar.jpg"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-primary"></i>
                                                    Jordan
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar2.jpg"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-primary"></i>
                                                    Stewart
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar3.jpg"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-warning"></i>
                                                    Alfred
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar4.jpg"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-danger"></i>
                                                    Eileen
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar5.jpg"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-muted"></i>
                                                    Robert
                                                </a>
                                            </li>
                                            <li class="rightsidebar-contact-wrapper">
                                                <a class="rightsidebar-contact" href="#">
                                                    <img src="img/authors/avatar7.jpg"
                                                         class="rounded-circle float-right" alt="avatar-image">
                                                    <i class="fa fa-circle text-xs text-muted"></i>
                                                    Cassandra
                                                </a>
                                            </li>
                                        </ul>

                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-export"></i>
                                            Recent Updates
                                        </h5>
                                        <div>
                                            <ul class="list-unstyled">
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-comments-smiley fa-fw text-primary"></i>
                                                        New Comment
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-twitter-alt fa-fw text-success"></i>
                                                        3 New Followers
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-email fa-fw text-info"></i>
                                                        Message Sent
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-write fa-fw text-warning"></i>
                                                        New Task
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-export fa-fw text-danger"></i>
                                                        Server Rebooted
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-info-alt fa-fw text-primary"></i>
                                                        Server Not Responding
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-shopping-cart fa-fw text-success"></i>
                                                        New Order Placed
                                                    </a>
                                                </li>
                                                <li class="rightsidebar-notification">
                                                    <a href="#">
                                                        <i class="fa ti-money fa-fw text-info"></i>
                                                        Payment Received
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="r_tab2">
                                    <div id="slim_t2">
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-bell"></i>
                                            Notifications
                                        </h5>
                                        <ul class="list-unstyled m-t-15 notifications">
                                            <li>
                                                <a href="" class="message icon-not striped-col">
                                                    <img class="message-image rounded-circle"
                                                         src="img/authors/avatar3.jpg" alt="avatar-image">

                                                    <div class="message-body">
                                                        <strong>John Doe</strong>
                                                        <br>
                                                        5 members joined today
                                                        <br>
                                                        <small class="noti-date">Just now</small>
                                                    </div>

                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="message icon-not">
                                                    <img class="message-image rounded-circle"
                                                         src="img/authors/avatar.jpg" alt="avatar-image">
                                                    <div class="message-body">
                                                        <strong>Tony</strong>
                                                        <br>
                                                        likes a photo of you
                                                        <br>
                                                        <small class="noti-date">5 min</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="message icon-not striped-col">
                                                    <img class="message-image rounded-circle"
                                                         src="img/authors/avatar6.jpg" alt="avatar-image">

                                                    <div class="message-body">
                                                        <strong>John</strong>
                                                        <br>
                                                        Dont forgot to call...
                                                        <br>
                                                        <small class="noti-date">11 min</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="message icon-not">
                                                    <img class="message-image rounded-circle"
                                                         src="img/authors/avatar1.jpg" alt="avatar-image">
                                                    <div class="message-body">
                                                        <strong>Jenny Kerry</strong>
                                                        <br>
                                                        Done with it...
                                                        <br>
                                                        <small class="noti-date">1 Hour</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="" class="message icon-not striped-col">
                                                    <img class="message-image rounded-circle"
                                                         src="img/authors/avatar7.jpg" alt="avatar-image">

                                                    <div class="message-body">
                                                        <strong>Ernest Kerry</strong>
                                                        <br>
                                                        2 members joined today
                                                        <br>
                                                        <small class="noti-date">3 Days</small>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-right noti-footer"><a href="#">View All Notifications <i
                                                            class="ti-arrow-right"></i></a></li>
                                        </ul>
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-check-box"></i>
                                            Tasks
                                        </h5>
                                        <ul class="list-unstyled m-t-15">
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>Button Design</span>
                                                        <small class="float-right text-muted">40%</small>
                                                    </p>
                                                    <div class="progress progress-xs  active">
                                                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 40%">
                                                            <span class="sr-only">40% Complete (success)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>Theme Creation</span>
                                                        <small class="float-right text-muted">20%</small>
                                                    </p>
                                                    <div class="progress progress-xs  active">
                                                        <div class="progress-bar bg-info progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 20%">
                                                            <span class="sr-only">20% Complete</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>XYZ Task To Do</span>
                                                        <small class="float-right text-muted">60%</small>
                                                    </p>
                                                    <div class="progress progress-xs  active">
                                                        <div class="progress-bar bg-warning progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 60%">
                                                            <span class="sr-only">60% Complete (warning)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div>
                                                    <p>
                                                        <span>Transitions Creation</span>
                                                        <small class="float-right text-muted">80%</small>
                                                    </p>
                                                    <div class="progress progress-xs active">
                                                        <div class="progress-bar bg-danger progress-bar-striped" role="progressbar"
                                                             aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 80%">
                                                            <span class="sr-only">80% Complete (danger)</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="text-right"><a href="#">View All Tasks <i
                                                            class="ti-arrow-right"></i></a>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                                <div class="tab-pane fade" id="r_tab3">
                                    <div id="slim_t3">

                                        <h5 class="rightsidebar-right-heading text-uppercase gen-sett-m-t text-xs">
                                            <i class="fa fa-fw ti-settings"></i>
                                            General
                                        </h5>
                                        <ul class="list-unstyled settings-list m-t-10">
                                            <li>
                                                <label for="status">Available</label>
                                                <span class="float-right">
                                            <input type="checkbox" id="status" name="my-checkbox" checked>
                                        </span>
                                            </li>
                                            <li>
                                                <label for="email-auth">Login with Email</label>
                                                <span class="float-right">
                                            <input type="checkbox" id="email-auth" name="my-checkbox">
                                        </span>
                                            </li>
                                            <li>
                                                <label for="update">Auto Update</label>
                                                <span class="float-right">
                                            <input type="checkbox" id="update" name="my-checkbox">
                                        </span>
                                            </li>

                                        </ul>
                                        <h5 class="rightsidebar-right-heading text-uppercase text-xs">
                                            <i class="fa fa-fw ti-volume"></i>
                                            Sound & Notification
                                        </h5>
                                        <ul class="list-unstyled settings-list m-t-10">
                                            <li>
                                                <label for="chat-sound">Chat Sound</label>
                                                <span class="float-right">
                                            <input type="checkbox" id="chat-sound" name="my-checkbox" checked>
                                        </span>
                                            </li>
                                            <li>
                                                <label for="noti-sound">Notification Sound</label>
                                                <span class="float-right">
                                            <input type="checkbox" id="noti-sound" name="my-checkbox">
                                        </span>
                                            </li>
                                            <li>
                                                <label for="remain">Remainder </label>
                                                <span class="float-right">
                                            <input type="checkbox" id="remain" name="my-checkbox" checked>
                                        </span>

                                            </li>
                                            <li>
                                                <label for="vol">Volume</label>
                                                <input type="range" id="vol" min="0" max="100" value="15">
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="background-overlay"></div>
        </section>
        <!-- /.content -->
    </aside>
@stop
@section('scripts')
    <!-- begining of page level js -->
    <script type="text/javascript" src="vendors/pnotify/js/pnotify.js"></script>
    <script type="text/javascript" src="vendors/pnotify/js/pnotify.animate.js"></script>
    <script type="text/javascript" src="vendors/pnotify/js/pnotify.buttons.js"></script>
    <script type="text/javascript" src="vendors/pnotify/js/pnotify.confirm.js"></script>
    <script type="text/javascript" src="vendors/pnotify/js/pnotify.nonblock.js"></script>
    <script type="text/javascript" src="vendors/pnotify/js/pnotify.mobile.js"></script>
    <script type="text/javascript" src="vendors/pnotify/js/pnotify.desktop.js"></script>
    <script type="text/javascript" src="vendors/pnotify/js/pnotify.history.js"></script>
    <script type="text/javascript" src="vendors/pnotify/js/pnotify.callbacks.js"></script>
    <script type="text/javascript" src="vendors/select2/js/select2.js"></script>

    <script src="js/custom_js/notifications.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
    <!-- end of page level js -->
@stop

