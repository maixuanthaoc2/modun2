
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<script>
    git remote set-url git@github.com:me/myrepo.git<!DOCTYPE html>
    <html lang="en">
        <head>
        <meta charset="UTF-8">
        <title>Document</title>
        </head>
        <body>
        <script>
        function Tinhdiemtb()
        {
            var x1=document.getElementById('diem1');
            var x2=document.getElementById('diem2');

            if(x1.value=='' && x2.value=='')
            {
                alert('Bạn đã nhập thiếu giá trị vào ô nhập liệu');

            }
            else if(x1.value=='')
            {
                alert('Bạn đã nhập thiếu giá trị ô nhập liệu thứ 1');
            }
            else if(x2.value=='')
            {
                alert('Bạn đã nhập thiếu giá trị ô nhập liệu thứ 2');
            }
            else if(isNaN(x1.value)&&isNaN(x2.value))
            {
                alert('Kí tự bạn nhập không phải là số');
            }
            else if(isNaN(x1.value) )
            {
                alert('Kí tự bạn nhập không phải là số');
            }
            else if(isNaN(x2.value))
            {
                alert('Kí tự bạn nhập không phải là số');
            }
            var tb=document.getElementById('dtb');
            tb=(parseFloat(x1.value)+parseFloat(x2.value)*2)/3;
            var tbfix=tb.toFixed(2);//Lấy 2 số thập phân sau dấu phẩy và làm tròn
        }
</script>
</body>
</html>
</script>
</body>
</html>