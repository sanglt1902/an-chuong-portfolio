$('.first.circle').circleProgress({
    value: 0.2
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(15 * progress) + '<i>%</i>');
});
$('.second.circle').circleProgress({
    value: 0.3
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(30 * progress) + '<i>%</i>');
});
$('.third.circle').circleProgress({
    value: 0.5
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(50 * progress) + '<i>%</i>');
});
$('.fourth.circle').circleProgress({
    value: 0.7
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(70 * progress) + '<i>%</i>');
});
$('.fifth.circle').circleProgress({
    value: 0.9
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(90 * progress) + '<i>%</i>');
});
$('.sixth.circle').circleProgress({
    value: 1
}).on('circle-animation-progress', function(event, progress) {
    $(this).find('strong').html(parseInt(100 * progress) + '<i>%</i>');
});