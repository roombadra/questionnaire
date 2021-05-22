<div>
    <div class="container text-center mt-4">
         <dl>
            <dt>Q_1</dt>
            <dd>Comment procédez-vous pour vos achats à dans les villes ?</dd><br>
            <dt>Q_2</dt>
            <dd>Combien payez vous comme transport de votre position jusqu’au lieu de ravitaillement Aller/Retour ?</dd><br>
            <dt>Q_3</dt>
            <dd>Avez-vous un grossiste personnel ?</dd><br>
            <dt>Q_4</dt>
            <dd>Serez-vous content si quelqu’un vous livrais ?</dd><br>
            <dt>Q_5</dt>
            <dd>Serez-vous prêt à travailler avec un service de livraison ?</dd><br>
            <dt>Q_6</dt>
            <dd>Pouvez-vous avoir accès à internet ?</dd><br>
            <dt>Q_7</dt>
            <dd>Seriez-vous prêt à confier vos courses à une structure pour vous faire livrer chez vous à la maison sans vous déplacer ?</dd><br>
            <dt>Q_8</dt>
            <dd>Comment souhaiterez vous payer le service de livraison ?</dd><br>
            <dt>Q_9</dt>
            <dd>Serez-vous prêt à payer l’intégralité de votre transport à la structure pour vous faire livrer ?</dd><br>
            <dt>Q_10</dt>
            <dd>Aimeriez-vous qu’on fasse du semi-gros en plus de la vente en gros que nous proposons ?</dd><br>
            <dt>Q_11</dt>
            <dd>Lors de vos achats quelles sont les produits vivriers que vous achetés le plus en gros ou en demi-gros </dd><br>
            <dt>Q_12</dt>
            <dd>A part cette commune  avez-vous une autre localité pour effectuer vos achats ?</dd>
          </dl>
    </div>
  <div class="container">
  <table class="table mt-4">
  <thead>   
    <tr>
      <th scope="col">#id</th>
      <th scope="col">Nom agent</th>
      <th scope="col">Nom </th>
      <th scope="col">Prenom</th>
      <th scope="col">Commune</th>
      <th scope="col">Q_1</th>
      <th scope="col">Q_2</th>
      <th scope="col">Q_3</th>
      <th scope="col">Q_4</th>
      <th scope="col">Q_4</th>
      <th scope="col">Q_5</th>
      <th scope="col">Q_6</th>
      <th scope="col">Q_7</th>
      <th scope="col">Q_9</th>
      <th scope="col">Q_10</th>
      <th scope="col">Q_11</th>
      <th scope="col">Q_12</th>
    </tr>
  </thead>
  <tbody>
      @foreach($asks ?? '' as $ask)
    <tr>
                  <th scope="row">{{$ask->id}}</th>
                  <td>{{$ask->agent}}</td>
                  <td>{{$ask->nom}}</td>
                  <td>{{$ask->prenom}}</td>
                  <td>{{$ask->commune}}</td>
                  <td>{{$ask->q_1}}</td>
                  <td>{{$ask->q_2}}</td>
                  <td>{{$ask->q_3}}</td>
                  <td>{{$ask->q_4}}</td>
                  <td>{{$ask->q_5}}</td>
                  <td>{{$ask->q_6}}</td>
                  <td>{{$ask->q_7}}</td>
                  <td>{{$ask->q_8}}</td>
                  <td>{{$ask->q_9}}</td>
                  <td>{{$ask->q_10}}</td>
                  <td>{{$ask->q_11}}</td>
                  <td>{{$ask->q_12}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
<div class="container">
  {{ $asks ?? ''->links() }}
</div>
  </div>
</div>
