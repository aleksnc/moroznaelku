function send()
{
//�������� ���������
var name = $('#name').val()
var tel = $('#tel').val()
var koment = $('#koment').val()
  // �������� �������
       $.ajax({
                type: "POST",
                url: "scripts/for_php.php",
                data: "name="+name+"&tel="+tel+"&koment="+koment,
                // ������� �� ��� ������ PHP
                success: function(html) {
 //�������������� ������� ������ ������� ��������
                        $("#preview").empty();
//� ������� ����� php �������
                        $("#preview").append(html);
                }
        });

}