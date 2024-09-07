@extends('layout.app')
@section('section')

<main class="main">

  @include('layout.cards.page-title', [
    'title' => 'About' ,
    'links' => [
        [
            'name' => 'Home',
            'url' => route('home.index'),
            'class' => '',
        ],
        [
            'name' => 'About',
            'url' => '',
            'class' => 'current',
        ]
    ],
])

  <section id="" class="about section">

    <div class="container content">

      <div>
        <h3>About Brains Media Solutions</h3>

        <p>Brains Media Solutions is a leading digital services provider specializing in web development, digital marketing, and mobile app development. Since our inception, we have been dedicated to offering innovative, reliable, and scalable solutions that help businesses thrive in the digital age. Our team of experts brings extensive experience, creativity, and technical know-how to every project, ensuring our clients receive the highest quality service tailored to their unique needs.</p>

        <p>At Brains Media Solutions, we are committed to helping businesses achieve their goals by leveraging the latest technologies and industry best practices. Whether you're looking to establish a strong online presence, develop a custom mobile application, or execute a results-driven marketing campaign, we have the tools and expertise to make it happen.</p>

        <p>We pride ourselves on delivering comprehensive solutions that cater to businesses of all sizes. Our approach focuses on understanding your business challenges and delivering customized services that ensure your success in today’s competitive market.</p>

        <p>With a focus on innovation, customer satisfaction, and reliability, we are your trusted partner in the digital space. Our portfolio includes successful collaborations with businesses across various industries, delivering high-performance solutions that drive growth and achieve measurable results.</p>

      </div>
    </div>
  </section>

  <section id="" class="about section light-background">

    <div class="container content">
      <div class="row pt-5 pb-5">
        <div class="col-8 d-flex align-items-center">
          <div>
            <h3>Our Vision</h3>
            <p>To be the premier digital solutions provider, empowering businesses through innovative technology, and helping them achieve sustained success in a constantly evolving digital landscape.</p>
          </div>
        </div>
        <div class="col-4"><img src="{{ asset('brainsmedia/assets/img/vision.jpg') }}" alt="" class="img-fluid rounded"></div>
      </div>

      <div class="row pt-5 pb-5">
        <div class="col-4">
          <img src="{{ asset('brainsmedia/assets/img/mission.jpg') }}" alt="" class="img-fluid rounded">
        </div>
        <div class="col-8 d-flex align-items-center">
          <div>
            <h4>Our Mission</h4>
            <p>Our mission is to deliver innovative, high-quality digital solutions that help businesses of all sizes succeed online. We are committed to offering tailored web development, mobile app development, and digital marketing services that meet the unique needs of our clients, while fostering long-term relationships built on trust, collaboration, and exceptional results.</p>
            <ul>
              <li><i class="bi bi-check-circle-fill"></i> Providing cutting-edge web development services that create impactful, user-friendly websites.</li>
              <li><i class="bi bi-check-circle-fill"></i> Developing mobile applications that offer seamless, intuitive experiences for end-users.</li>
              <li><i class="bi bi-check-circle-fill"></i> Delivering digital marketing strategies that drive traffic, increase brand visibility, and boost revenue.</li>
              <li><i class="bi bi-check-circle-fill"></i> Ensuring our solutions are scalable and adaptable to meet evolving market demands and client expectations.</li>
              <li><i class="bi bi-check-circle-fill"></i> Fostering a culture of innovation and creativity, constantly exploring new technologies to stay ahead of industry trends.</li>
            </ul>
          </div>
        </div>
      </div>

      <div class="row pt-5 pb-5">
        <div class="col-8 d-flex align-items-center">
          <div>
            <h4>Our Story</h4>
            <p>Founded by a team of passionate technologists and innovators, Brains Media Solutions was established with the vision of helping businesses harness the power of technology to achieve success. With years of experience in web development, app development, and digital marketing, we recognized the need for a company that not only provides technical expertise but also understands the unique challenges businesses face in the digital landscape.</p>

            <p>Since our inception, we have grown into a trusted partner for businesses looking to scale and compete in the digital world. Our journey has been marked by continuous innovation, a commitment to excellence, and a focus on delivering real results for our clients. As we look to the future, we remain dedicated to providing high-quality digital solutions that drive business growth and success.</p>
          </div>
        </div>
        <div class="col-4"><img src="{{ asset('brainsmedia/assets/img/story.jpg') }}" alt="" class="img-fluid rounded"></div>
      </div>
    </div>
  </section>

  @include('layout.cards.call-to-action')

</main>

@endsection
