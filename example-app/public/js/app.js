const tl = gsap.timeline({defaults: {duration: 0.75, ease:"power1.out"}})

tl.fromTo('#projeto', {y:0, rotation:'30deg'}, {y: -20, rotation:'30deg', yoyo: true, repeat:-1})