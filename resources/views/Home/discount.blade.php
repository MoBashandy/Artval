<div class="discount" id="discount">
    <div class="image">
      <div class="content">
        <h2>We Have A Discount</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium, esse voluptatem! Culpa, doloremque quisquam eos, veniam odio quia excepturi incidunt sed autem beatae dolor et ipsa. Placeat magni omnis eius.</p>
        <img src="imgs/discount.png" alt="">
      </div>
    </div>
    <div class="form">
      <div class="content">
        <h2>Request A Discount</h2>
        <form action="{{url('discount')}}" method="POST">
          @csrf
          <input class="input" type="text" placeholder="Your Name" name="name">
          <input class="input" type="email" placeholder="Your email" name="email">
          <input class="input" type="text" placeholder="Your mobile" name="phone">
          <textarea class="input"  placeholder="Tell Us About Your Needs" name="comment"></textarea>
          <input type="submit" value="Send">
        </form>
      </div>
    </div>
  </div>