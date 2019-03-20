/*!

=========================================================
* Argon Design System - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-design-system
* Copyright 2018 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-design-system/blob/master/LICENSE.md)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

*/

"use strict";
$(document).ready(function() {

    // Collapse navigation
    $('.navbar-main .collapse').on('hide.bs.collapse', function () {
        var $this = $(this);
        $this.addClass('collapsing-out');
    });

    $('.navbar-main .collapse').on('hidden.bs.collapse', function () {
        var $this = $(this);
        $this.removeClass('collapsing-out');
    });

    $('.navbar-main .dropdown').on('hide.bs.dropdown', function () {
        var $this = $(this).find('.dropdown-menu');

        $this.addClass('close');

        setTimeout(function(){
            $this.removeClass('close');
        }, 200);

    });

    // Headroom - show/hide navbar on scroll
    if($('.headroom')[0]) {
        var headroom  = new Headroom(document.querySelector("#navbar-main"), {
            offset: 300,
            tolerance : {
                up : 30,
                down : 30
            },
        });
        headroom.init();
    }

    // Datepicker
    $('.datepicker')[0] && $('.datepicker').each(function() {
        $('.datepicker').datepicker({
            disableTouchKeyboard: true,
            autoclose: false
        });
    });

    // Tooltip
    $('[data-toggle="tooltip"]').tooltip();

    // Popover
    $('[data-toggle="popover"]').each(function() {
        var popoverClass = '';
        if($(this).data('color')) {
            popoverClass = 'popover-'+$(this).data('color');
        }
        $(this).popover({
            trigger: 'focus',
            template: '<div class="popover '+ popoverClass +'" role="tooltip"><div class="arrow"></div><h3 class="popover-header"></h3><div class="popover-body"></div></div>'
        })
    });

    // Additional .focus class on form-groups
    $('.form-control').on('focus blur', function(e) {
        $(this).parents('.form-group').toggleClass('focused', (e.type === 'focus' || this.value.length > 0));
    }).trigger('blur');

    // NoUI Slider
    if ($(".input-slider-container")[0]) {
        $('.input-slider-container').each(function() {

            var slider = $(this).find('.input-slider');
            var sliderId = slider.attr('id');
            var minValue = slider.data('range-value-min');
            var maxValue = slider.data('range-value-max');

            var sliderValue = $(this).find('.range-slider-value');
            var sliderValueId = sliderValue.attr('id');
            var startValue = sliderValue.data('range-value-low');

            var c = document.getElementById(sliderId),
                d = document.getElementById(sliderValueId);

            noUiSlider.create(c, {
                start: [parseInt(startValue)],
                connect: [true, false],
                //step: 1000,
                range: {
                    'min': [parseInt(minValue)],
                    'max': [parseInt(maxValue)]
                }
            });

            c.noUiSlider.on('update', function(a, b) {
                d.textContent = a[b];
            });
        })
    }

    if ($("#input-slider-range")[0]) {
        var c = document.getElementById("input-slider-range"),
            d = document.getElementById("input-slider-range-value-low"),
            e = document.getElementById("input-slider-range-value-high"),
            f = [d, e];

        noUiSlider.create(c, {
            start: [parseInt(d.getAttribute('data-range-value-low')), parseInt(e.getAttribute('data-range-value-high'))],
            connect: !0,
            range: {
                min: parseInt(c.getAttribute('data-range-value-min')),
                max: parseInt(c.getAttribute('data-range-value-max'))
            }
        }), c.noUiSlider.on("update", function(a, b) {
            f[b].textContent = a[b]
        })
    }


    // When in viewport
    $('[data-toggle="on-screen"]')[0] && $('[data-toggle="on-screen"]').onScreen({
        container: window,
        direction: 'vertical',
        doIn: function() {
            //alert();
        },
        doOut: function() {
            // Do something to the matched elements as they get off scren
        },
        tolerance: 200,
        throttle: 50,
        toggleClass: 'on-screen',
        debug: false
    });

    // Scroll to anchor with scroll animation
    $('[data-toggle="scroll"]').on('click', function(event) {
        var hash = $(this).attr('href');
        var offset = $(this).data('offset') ? $(this).data('offset') : 0;

        // Animate scroll to the selected section
        $('html, body').stop(true, true).animate({
            scrollTop: $(hash).offset().top - offset
        }, 600);

        event.preventDefault();
    });
 });
 ////////////////////////////////////
//      CODIGO SELECTPICKER       //
//     CODIGO SELECTPICKER       //
////////////////////////////////////
var util = {
f: {
  addStyle: function (elem, prop, val, vendors) {
    var i, ii, property, value
    if (!util.f.isElem(elem)) {
      elem = document.getElementById(elem)
    }
    if (!util.f.isArray(prop)) {
      prop = [prop]
      val = [val]
    }
    for (i = 0; i < prop.length; i += 1) {
      var thisProp = String(prop[i]),
        thisVal = String(val[i])
      if (typeof vendors !== "undefined") {
        if (!util.f.isArray(vendors)) {
          vendors.toLowerCase() == "all" ? vendors = ["webkit", "moz", "ms", "o"] : vendors = [vendors]
        }
        for (ii = 0; ii < vendors.length; ii += 1) {
          elem.style[vendors[i] + thisProp] = thisVal
        }
      }
      thisProp = thisProp.charAt(0).toLowerCase() + thisProp.slice(1)
      elem.style[thisProp] = thisVal
    }
  },
  cssLoaded: function (event) {
    var child = util.f.getTrg(event)
    child.setAttribute("media", "all")
  },
  events: {
    cancel: function (event) {
      util.f.events.prevent(event)
      util.f.events.stop(event)
    },
    prevent: function (event) {
      event = event || window.event
      event.preventDefault()
    },
    stop: function (event) {
      event = event || window.event
      event.stopPropagation()
    }
  },
  getSize: function (elem, prop) {
    return parseInt(elem.getBoundingClientRect()[prop], 10)
  },
  getTrg: function (event) {
    event = event || window.event
    if (event.srcElement) {
      return event.srcElement
    } else {
      return event.target
    }
  },
  isElem: function (elem) {
    return (util.f.isNode(elem) && elem.nodeType == 1)
  },
  isArray: function(v) {
    return (v.constructor === Array)
  },
  isNode: function(elem) {
    return (typeof Node === "object" ? elem instanceof Node : elem && typeof elem === "object" && typeof elem.nodeType === "number" && typeof elem.nodeName==="string" && elem.nodeType !== 3)
  },
  isObj: function (v) {
    return (typeof v == "object")
  },
  replaceAt: function(str, index, char) {
    return str.substr(0, index) + char + str.substr(index + char.length);
  }
}
},
 //////////////////////////////////////
// ok that's all the utilities      //
// onto the select box / form stuff //
//////////////////////////////////////
form = {
f: {
init: {
  register: function () {
    console.clear()// just cuz codepen
    var child, children = document.getElementsByClassName("field"), i
    for (i = 0; i < children.length; i += 1) {
      child = children[i]
      util.f.addStyle(child, "Opacity", 1)
    }
    children = document.getElementsByClassName("psuedo_select")
    for (i = 0; i < children.length; i += 1) {
      child = children[i]
      child.addEventListener("click", form.f.select.toggle)
    }
  },
  unregister: function () {
    //just here as a formallity
    //call this to stop all ongoing timeouts are ready the page for some sort of json re-route
  }
},
select: {
  blur: function (field) {
    field.classList.remove("focused")
    var child, children = field.childNodes, i, ii, nested_child, nested_children
    for (i = 0; i < children.length; i += 1) {
      child = children[i]
      if (util.f.isElem(child)) {
        if (child.classList.contains("deselect")) {
          child.parentNode.removeChild(child)
        } else if (child.tagName == "SPAN") {
          if (!field.dataset.value) {
            util.f.addStyle(child, ["FontSize", "Top"], ["16px", "32px"])
          }
        } else if (child.classList.contains("psuedo_select")) {
          nested_children = child.childNodes
          for (ii = 0; ii < nested_children.length; ii += 1) {
            nested_child = nested_children[ii]
            if (util.f.isElem(nested_child)) {
              if (nested_child.tagName == "SPAN") {
                if (!field.dataset.value) {
                  util.f.addStyle(nested_child, ["Opacity", "Transform"], [0, "translateY(24px)"])
                }
              } else if (nested_child.tagName == "UL") {
                  util.f.addStyle(nested_child, ["Height", "Opacity"], [0, 0])
              }
            }
          }
        }
      }
    }
  },
  focus: function (field) {
    field.classList.add("focused")
    var bool = false, child, children = field.childNodes, i, ii, iii, nested_child, nested_children, nested_nested_child, nested_nested_children, size = 0
    for (i = 0; i < children.length; i += 1) {
      child = children[i]
      util.f.isElem(child) && child.classList.contains("deselect") ? bool = true : null
    }
    if (!bool) {
      child = document.createElement("div")
      child.className = "deselect"
      child.addEventListener("click", form.f.select.toggle)
      field.insertBefore(child, children[0])
    }
    for (i = 0; i < children.length; i += 1) {
      child = children[i]
      if (util.f.isElem(child) && child.classList.contains("psuedo_select")) {
        nested_children = child.childNodes
        for (ii = 0; ii < nested_children.length; ii += 1) {
          nested_child = nested_children[ii]
          if (util.f.isElem(nested_child) && nested_child.tagName == "UL") {
            size = 0
            nested_nested_children = nested_child.childNodes
            for (iii = 0; iii < nested_nested_children.length; iii += 1) {
              nested_nested_child = nested_nested_children[iii]
              if (util.f.isElem(nested_nested_child) && nested_nested_child.tagName == "LI") {
                size += util.f.getSize(nested_nested_child, "height")
                console.log("size: " + size)
              }
            }
            util.f.addStyle(nested_child, ["Height", "Opacity"], [size + "px", 1])
          }
        }
      }
    }
  },
  selection: function (child, parent) {
    var children = parent.childNodes, i, ii, nested_child, nested_children, time = 0, value
    if (util.f.isElem(child) && util.f.isElem(parent)) {
      parent.dataset.value = child.dataset.value
      value = child.innerHTML
    }
    for (i = 0; i < children.length; i += 1) {
      child = children[i]
      if (util.f.isElem(child)) {
        if (child.classList.contains("psuedo_select")) {
          nested_children = child.childNodes
          for (ii = 0; ii < nested_children.length; ii += 1) {
            nested_child = nested_children[ii]
            if (util.f.isElem(nested_child) && nested_child.classList.contains("selected")) {
              if (nested_child.innerHTML)  {
                time = 1E2
                util.f.addStyle(nested_child, ["Opacity", "Transform"], [0, "translateY(24px)"], "all")
              }
              setTimeout(function (c, v) {
                c.innerHTML = v
                util.f.addStyle(c, ["Opacity", "Transform", "TransitionDuration"], [1, "translateY(0px)", ".1s"], "all")
              }, time, nested_child, value)
            }
          }
        } else if (child.tagName == "SPAN") {
          util.f.addStyle(child, ["FontSize", "Top"], ["12px", "8px"])
         }
       }
    }
  },
  toggle: function (event) {
    util.f.events.stop(event)
    var child = util.f.getTrg(event), children, i, parent
    switch (true) {
      case (child.classList.contains("psuedo_select")):
      case (child.classList.contains("deselect")):
        parent = child.parentNode
        break
      case (child.classList.contains("options")):
        parent = child.parentNode.parentNode
        break
      case (child.classList.contains("option")):
        parent = child.parentNode.parentNode.parentNode
        form.f.select.selection(child, parent)
        break
    }
    parent.classList.contains("focused") ? form.f.select.blur(parent) : form.f.select.focus(parent)
  }
}
}}
window.onload = form.f.init.register
////////////////////////////////////
//      CODIGO SELECTPICKER       //
//     CODIGO SELECTPICKER       //
////////////////////////////////////
