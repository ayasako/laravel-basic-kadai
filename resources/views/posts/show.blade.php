<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laravel</title>
 </head>
 
 <body>
     <table>
         <tr>
             <th>ID</th>
             <td>{{ $product->id }}</td>
         </tr>
         <tr>
             <th>タイトル</th>
             <td>{{ $product->title }}</td>
         </tr>
         <tr>
             <th>本文</th>
             <td>{{ $product->content }}</td>
         </tr>    
         <tr>
             <th>作成日時</th>
             <td>{{ $product->created_at }}</td>            
         </tr>
         <tr>
             <th>更新日時</th>
             <td>{{ $product->updated_at }}</td>
         </tr>      
     </table>
 </body>
 
 </html>