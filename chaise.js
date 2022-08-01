class Chaise {
    // Object is an entity which is having state and behavior
    /**
     * State: attribut
     * characteriste
     */

    /**
     * Behavior: function
     */

    /**
     * Operating system is a system which will manage computer 
     * hardware and software application.
     */
}

class Person {
    constructor(opt) {
        console.log(`Creating instance unsing ${opt} option`);
        this.opt = opt;
    }
}

const foo = new Person('Speedy');

class SuperClass {
    constructor() {
        this.logger = console.log;
    }

    log() {
        this.logger(`Hello ${this.name}`);
    }
}

class SubClass extends SuperClass {
    constructor() {
        super();
        this.name = 'subclass';
    }
}

const subClass = new SubClass();

subClass.log();

class MyClass {
    static myStaticMethod() {
        return 'Hello';
    }
    static get myStaticProperty() {
        return 'Goodbye';
    }
}

console.log(MyClass.myStaticMethod());

console.log(MyClass.myStaticProperty);

// We can see that static properties are not defined on object instances

const MyClassInstance = new MyClass();

console.log(MyClassInstance.myStaticProperty);