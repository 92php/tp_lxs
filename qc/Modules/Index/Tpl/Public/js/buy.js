
$(function () {

	$( '#main' ).height( $( window ).height() - $( '#top' ).height() - 45);

	var paper = $( '.paper' );
	var FW = $( window ).width();
	var FH = $( '#main' ).height();
	for (var i = 0; i < paper.length; i++) {
		var obj = paper.eq(i);
		obj.css( {
			left : parseInt(Math.random() * (FW - obj.width())) + 'px',
			top : parseInt(Math.random() * (FH - obj.height())) + 'px'
		} );
		drag(obj, $( 'dt', obj ));
	}

	paper.click( function () {
		$( this ).css( 'z-index', 1 ).siblings().css( 'z-index', 0 );
	} );

	$( '.close' ).click( function () {
		$( this ).parents( 'dl' ).fadeOut('slow');
		return false;
	} );

	$( '#send' ).click( function () {
		$( '<div id="windowBG"></div>' ).css( {
			width : $(document).width(),
 			height : $(document).height(),
 			position : 'absolute',
 			top : 0,
 			left : 0,
 			zIndex : 998,
 			opacity : 0.3,
 			filter : 'Alpha(Opacity = 30)',
 			backgroundColor : '#000000'
		} ).appendTo( 'body' );

		var obj = $( '#send-form' );
		obj.css( {
			left : ( $( window ).width() - obj.width() ) / 2,
			top : $( document ).scrollTop() + ( $( window ).height() - obj.height() ) / 2
		} ).fadeIn();
	} );

	$( '#close' ).click( function () {
		$( '#send-form' ).fadeOut( 'slow', function () {
			$( '#windowBG' ).remove();
		} );
		return false;
	} );
	

	$( 'textarea[name=content]' ).keyup( function () {
		var content = $(this).val();
		var lengths = check(content);  //����check����ȡ�õ�ǰ����

		//�����������50����
		if (lengths[0] >= 50) {
			$(this).val(content.substring(0, Math.ceil(lengths[1])));
		}

		var num = 50 - Math.ceil(lengths[0]);
		var msg = num < 0 ? 0 : num;
		//��ǰ����ͬ������ʾ��ʾ
		$( '#font-num' ).html( msg );
	} );
	$( '#phiz img' ).click( function () {
		var phiz = '[' + $( this ).attr('alt') + ']';
		var obj = $( 'textarea[name=content]' );
		obj.val(obj.val() + phiz);
	} );
	//�첽����
	
	$('#send-btn').click(function(){
		var username=$('input[name=username]');
		var content=$('textarea[name=content]');
		if(username.val()==''){
			alert('�û�������Ϊ�գ�');
			username.focus();
			return;
		}
		if(content.val()==''){
			alert('���ݲ���Ϊ�գ�');
			content.focus();
			return;
		}
		$.post(handleurl,{username:username.val(),content:content.val()},function(data){
			if(data.status){
				var str  ='<dl class="paper a1">';
					str	+='<dt><span class="username">' + data.username + '</span>';
					str	+='<span class="num">No.' + data.id + '</span>';
					str	+='</dt><dd class="content">' + data.content + '</dd>';
					str	+='<dd class="bottom">';
					str	+='<span class="time">' + data.time + '</span>';
					str	+='<a href="" class="close"></a></dd></dl>';
					$( '#main' ).append(str);
					$( '#close' ).click();
			}else{
				alert('����ʧ��');
			}
		},'json')
	})
});

/**
* Ԫ����ק
* @param  obj		��ק�Ķ���
* @param  element 	������ק�Ķ���
*/
function drag (obj, element) {
	var DX, DY, moving;

	element.mousedown(function (event) {
		obj.css( {
			zIndex : 1,
			opacity : 0.5,
 			filter : 'Alpha(Opacity = 50)'
		} );

		DX = event.pageX - parseInt(obj.css('left'));	//�������¼�Դ���
		DY = event.pageY - parseInt(obj.css('top'));	//�������¼�Դ�߶�

		moving = true;	//��¼��ק״̬
	});

	$(document).mousemove(function (event) {
		if (!moving) return;

		var OX = event.pageX, OY = event.pageY;	//�ƶ�ʱ��굱ǰ X��Y λ��
		var	OW = obj.outerWidth(), OH = obj.outerHeight();	//��ק�������
		var DW = $(window).width(), DH = $(window).height();  //ҳ�����

		var left, top;	//���㶨λ����

		left = OX - DX < 0 ? 0 : OX - DX > DW - OW ? DW - OW : OX - DX;
		top = OY - DY < 0 ? 0 : OY - DY > DH - OH ? DH - OH : OY - DY;

		obj.css({
			'left' : left + 'px',
			'top' : top + 'px'
		});

	}).mouseup(function () {
		moving = false;	//���̧����ȡ��ק״̬

		obj.css( {
			opacity : 1,
 			filter : 'Alpha(Opacity = 100)'
		} );

	});
}

/**
 * ͳ������
 * @param  �ַ���
 * @return ����[��ǰ����, �������]
 */
function check (str) {
	var num = [0, 50];
	for (var i=0; i<str.length; i++) {
		//�ַ�����������ʱ
		if (str.charCodeAt(i) >= 0 && str.charCodeAt(i) <= 255){
			num[0] = num[0] + 0.5;//��ǰ��������0.5��
			num[1] = num[1] + 0.5;//���������������0.5��
		} else {//�ַ���������ʱ
			num[0]++;//��ǰ��������1��
		}
	}
	return num;
}