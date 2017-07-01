<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Reviews</th>
        <th>Min ride price</th>
    </tr>
    </thead>
    <tbody>
        @foreach($parks as $park)

             <tr>
                 <td>
                     {{$park->name}}
                 </td>
                 <td>
                     {{ $park->review_score }}
                 </td>
                 <td>
                     {{ $park->min_price }}
                 </td>
             </tr>

        @endforeach
    </tbody>
</table>