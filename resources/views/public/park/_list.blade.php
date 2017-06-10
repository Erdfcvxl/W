<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Reviews</th>
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
             </tr>

        @endforeach
    </tbody>
</table>