const navLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('section');

        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.7, // Adjust this threshold as needed
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                const sectionId = entry.target.id;
                const navLink = document.querySelector(`a[href="#${sectionId}"]`);
                
                if (entry.isIntersecting) {
                    navLink.classList.add('underline');
                } else {
                    navLink.classList.remove('underline');
                }
            });
        }, options);

        sections.forEach((section) => {
            observer.observe(section);
        });