<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Laravel</title>
 </head>
 
 <body>
     <h1>お問い合わせ</h1>
     <form action="{{ route('posts.store') }}" method="POST">
         @csrf
         <table>
              <tr>
                  <th>タイトル</th>
                  <td>                     
                      <textarea name="title" cols="30" rows="10"></textarea>
                  </td>
              </tr>  
             
              <tr>
                  <th>本文</th>
                  <td>                     
                      <textarea name="content" cols="30" rows="10"></textarea>
                  </td>
              </tr>      
         </table>
         <input type="submit" value="投稿">
     </form>
 </body>
 
 </html>